<?php
/**
 * AXIS FLOW · Inicio de sesión único (SSO) desde AXIS.
 *
 * AXIS firma un token JWT (HS256, de vida corta y de un solo uso) con la identidad del usuario y lo envía por POST
 * a `index.php?m=axissso&f=login`. Este modelo valida el token, crea o actualiza el usuario de AXIS FLOW y sincroniza
 * sus grupos de permisos según su rol en AXIS.
 *
 * Variables de entorno:
 *   AXIS_SSO_SECRET          Secreto compartido con AXIS (obligatorio; sin él el SSO queda deshabilitado).
 *   AXIS_SSO_ENFORCE         "1" = el inicio de sesión local solo se permite a AXIS_SSO_LOCAL_ACCOUNTS. Por defecto apagado.
 *   AXIS_SSO_LOGIN_URL       URL de AXIS a la que se envía a quien llega sin sesión (ej. https://axis.ejemplo.com).
 *   AXIS_SSO_LOCAL_ACCOUNTS  Cuentas con acceso local de emergencia, separadas por coma. Por defecto "admin".
 *   AXIS_SSO_ROLE_MAP        (Opcional) JSON { "RolAXIS": ["grupo", ...] } con los códigos de grupo de ZenTao.
 */
class axisssoModel extends model
{
    const ISSUER   = 'axis';
    const AUDIENCE = 'axisflow';
    const LEEWAY   = 30;

    /* Rol de AXIS => códigos de grupo de AXIS FLOW (campo `role` de zt_group). */
    protected $defaultRoleMap = array(
        'SuperUser'   => array('admin', 'top', 'pm', 'qa'),
        'Director'    => array('top', 'po', 'qa'),
        'Gerente'     => array('po', 'qa', 'top'),   /* Product Owner y QA; sin rol de administración */
        'Coordinador' => array('pm', 'td', 'qa'),    /* Scrum Master, arquitectura/DevOps y pruebas no funcionales */
        'Asistencia'  => array('dev'),               /* Solo desarrollo (UX/UI y front-end); sin pruebas */
        'Empleado'    => array('others'),
    );

    public function env(string $name, string $default = ''): string
    {
        $value = getenv($name);
        if($value === false || $value === '') $value = $_SERVER[$name] ?? ($_ENV[$name] ?? '');
        return $value === '' ? $default : (string)$value;
    }

    public function enabled(): bool
    {
        return strlen($this->env('AXIS_SSO_SECRET')) >= 32;
    }

    public function enforced(): bool
    {
        return $this->enabled() && in_array(strtolower($this->env('AXIS_SSO_ENFORCE')), array('1', 'true', 'yes', 'on'), true);
    }

    public function axisUrl(): string
    {
        $url = $this->env('AXIS_SSO_LOGIN_URL');
        return preg_match('#^https?://#i', $url) ? $url : '';
    }

    public function localAccounts(): array
    {
        return array_values(array_filter(array_map('trim', explode(',', $this->env('AXIS_SSO_LOCAL_ACCOUNTS', 'admin')))));
    }

    /** ¿Puede esta cuenta iniciar sesión con usuario y contraseña de AXIS FLOW? */
    public function isLocalLoginAllowed(string $account): bool
    {
        if(!$this->enforced()) return true;
        return in_array($account, $this->localAccounts(), true);
    }

    protected function b64d(string $value)
    {
        $value = strtr($value, '-_', '+/');
        $pad   = strlen($value) % 4;
        if($pad) $value .= str_repeat('=', 4 - $pad);
        return base64_decode($value, true);
    }

    /**
     * Valida el token. Devuelve array con 'claims' o 'error'.
     */
    public function verifyToken(string $token): array
    {
        if(!$this->enabled()) return array('error' => 'SSO deshabilitado');
        $parts = explode('.', $token);
        if(count($parts) !== 3) return array('error' => 'Formato de token inválido');

        $header = json_decode((string)$this->b64d($parts[0]), true);
        if(!is_array($header) || ($header['alg'] ?? '') !== 'HS256') return array('error' => 'Algoritmo no permitido');

        $expected  = hash_hmac('sha256', $parts[0] . '.' . $parts[1], $this->env('AXIS_SSO_SECRET'), true);
        $signature = $this->b64d($parts[2]);
        if($signature === false || !hash_equals($expected, $signature)) return array('error' => 'Firma inválida');

        $claims = json_decode((string)$this->b64d($parts[1]), true);
        if(!is_array($claims)) return array('error' => 'Contenido inválido');

        $now = time();
        if(($claims['iss'] ?? '') !== self::ISSUER || ($claims['aud'] ?? '') !== self::AUDIENCE) return array('error' => 'Emisor o destino inválido');
        if(!isset($claims['exp']) || $claims['exp'] + self::LEEWAY < $now) return array('error' => 'El enlace expiró, vuelve a abrirlo desde AXIS');
        if(!isset($claims['iat']) || $claims['iat'] - self::LEEWAY > $now) return array('error' => 'Fecha del token inválida');
        if(empty($claims['jti']) || !is_string($claims['jti']) || strlen($claims['jti']) < 16) return array('error' => 'Identificador de token inválido');
        if(empty($claims['email']) || !filter_var($claims['email'], FILTER_VALIDATE_EMAIL)) return array('error' => 'El usuario no tiene correo válido');

        return array('claims' => $claims);
    }

    /** Marca el identificador como usado. Devuelve false si ya se había usado (reenvío del mismo token). */
    public function consumeJti(string $jti, int $exp): bool
    {
        $dir = $this->app->getTmpRoot() . 'axissso/';
        if(!is_dir($dir)) @mkdir($dir, 0775, true);

        /* Limpieza de marcas vencidas (máx. una vez por minuto). */
        $stamp = $dir . '.gc';
        if(!is_file($stamp) || filemtime($stamp) < time() - 60)
        {
            @touch($stamp);
            foreach((array)glob($dir . '*.jti') as $file) if(filemtime($file) < time() - 600) @unlink($file);
        }

        $path = $dir . hash('sha256', $jti) . '.jti';
        $fp   = @fopen($path, 'x');
        if(!$fp) return false;
        fwrite($fp, (string)$exp);
        fclose($fp);
        return true;
    }

    public function roleMap(): array
    {
        $custom = json_decode($this->env('AXIS_SSO_ROLE_MAP'), true);
        return is_array($custom) ? array_merge($this->defaultRoleMap, $custom) : $this->defaultRoleMap;
    }

    /** Código de "puesto" (zt_user.role) a partir de los grupos asignados. */
    protected function userRoleCode(array $codes): string
    {
        foreach(array('top', 'pm', 'qa', 'dev', 'po', 'td', 'pd', 'qd') as $code) if(in_array($code, $codes, true)) return $code;
        return 'others';
    }

    protected function accountFromEmail(string $email): string
    {
        $base = strtolower(preg_replace('/[^a-z0-9_]/i', '_', strstr($email, '@', true)));
        $base = trim(substr($base, 0, 24), '_');
        if(strlen($base) < 3) $base = 'usr_' . $base;

        $account = $base;
        for($i = 2; $this->dao->select('id')->from(TABLE_USER)->where('account')->eq($account)->fetch(); $i++) $account = $base . $i;
        return $account;
    }

    /**
     * Crea o actualiza el usuario de AXIS FLOW a partir de los datos de AXIS y devuelve el registro completo.
     * Devuelve string con el motivo si no se puede iniciar sesión.
     */
    public function provision(array $claims): object|string
    {
        $email = strtolower(trim($claims['email']));
        $name  = trim((string)($claims['name'] ?? '')) ?: strstr($email, '@', true);
        $role  = (string)($claims['role'] ?? 'Empleado');

        $user = $this->dao->select('*')->from(TABLE_USER)->where('LOWER(email)')->eq($email)->andWhere('deleted')->eq('0')->orderBy('id')->fetch();

        /* Nunca se inicia sesión por SSO en una cuenta de emergencia ni en un administrador de la empresa. */
        if($user)
        {
            $admins = (string)($this->app->company->admins ?? '');
            if(in_array($user->account, $this->localAccounts(), true) || strpos($admins, ",{$user->account},") !== false) return 'Esa cuenta es de uso local y no admite acceso por AXIS';
        }

        $map    = $this->roleMap();
        $codes  = $map[$role] ?? $map['Empleado'];
        $puesto = $this->userRoleCode($codes);

        if(!$user)
        {
            $account = $this->accountFromEmail($email);
            $row = array(
                'company' => (int)($this->app->company->id ?? 1), 'type' => 'inside', 'account' => $account,
                'password' => md5(bin2hex(random_bytes(24))), 'role' => $puesto, 'realname' => mb_substr($name, 0, 100),
                'email' => $email, 'join' => date('Y-m-d'), 'visions' => 'rnd,lite', 'clientLang' => 'es', 'deleted' => '0',
            );
            $this->dao->insert(TABLE_USER)->data($row)->exec();
            if(dao::isError()) return 'No se pudo crear el usuario en AXIS FLOW';
        }
        else
        {
            $this->dao->update(TABLE_USER)->set('realname')->eq(mb_substr($name, 0, 100))->set('role')->eq($puesto)->where('id')->eq($user->id)->exec();
            $account = $user->account;
        }

        $this->syncGroups($account, $codes);
        return $this->dao->select('*')->from(TABLE_USER)->where('account')->eq($account)->fetch();
    }

    /** Ajusta los grupos gestionados por el SSO sin tocar los que se hayan asignado a mano. */
    protected function syncGroups(string $account, array $wanted): void
    {
        $managed = array();
        foreach($this->roleMap() as $codes) foreach($codes as $code) $managed[$code] = true;

        $groups = $this->dao->select('id, role')->from(TABLE_GROUP)->where('project')->eq(0)->andWhere('devopsSpace')->eq(0)->andWhere('vision')->eq('rnd')->andWhere('role')->in(array_keys($managed))->fetchAll();
        $managedIds = $wantedIds = array();
        foreach($groups as $group)
        {
            $managedIds[] = (int)$group->id;
            if(in_array($group->role, $wanted, true)) $wantedIds[] = (int)$group->id;
        }

        $current = array_map('intval', array_keys($this->dao->select('`group`')->from(TABLE_USERGROUP)->where('account')->eq($account)->fetchPairs('group', 'group')));
        $remove  = array_values(array_diff(array_intersect($current, $managedIds), $wantedIds));
        $add     = array_values(array_diff($wantedIds, $current));

        if($remove) $this->dao->delete()->from(TABLE_USERGROUP)->where('account')->eq($account)->andWhere('`group`')->in($remove)->exec();
        foreach($add as $id)
        {
            $row = new stdclass();
            $row->account = $account;
            $row->group   = $id;
            $this->dao->replace(TABLE_USERGROUP)->data($row)->exec();
        }
    }
}
