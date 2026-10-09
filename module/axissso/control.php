<?php
/**
 * AXIS FLOW · SSO desde AXIS. Ver model.php.
 */
class axissso extends control
{
    /**
     * Recibe el token firmado por AXIS (POST `token`), crea la sesión y envía al usuario al inicio.
     */
    public function login()
    {
        $model = $this->axissso;
        if($_SERVER['REQUEST_METHOD'] !== 'POST') return $this->fail('Abre AXIS FLOW desde la opción «AXIS FLOW» del menú de AXIS.');
        if(!$model->enabled()) return $this->fail('El acceso desde AXIS no está configurado.');

        /* El POST viene de otro origen (AXIS): el filtro CSRF de ZenTao lo vacía, así que se lee el cuerpo crudo.
         * No hay riesgo CSRF útil: el token está firmado, caduca en 60 s y es de un solo uso. */
        parse_str((string)file_get_contents('php://input'), $body);
        $token  = trim((string)($body['token'] ?? ''));
        $result = $model->verifyToken($token);
        if(isset($result['error'])) return $this->fail($result['error']);

        $claims = $result['claims'];
        if(!$model->consumeJti($claims['jti'], (int)$claims['exp'])) return $this->fail('Este enlace ya fue usado. Ábrelo de nuevo desde AXIS.');

        try
        {
            $user = $model->provision($claims);
            if(is_string($user)) return $this->fail($user);

            helper::setcookie('logout', false, 0);
            $this->loadModel('user')->login($user, true, false);
            $this->session->set('axisSsoAt', time());
        }
        catch(Throwable $e)
        {
            error_log(date('c') . ' ' . get_class($e) . ': ' . $e->getMessage() . ' @ ' . $e->getFile() . ':' . $e->getLine() . "\n", 3, $this->app->getTmpRoot() . 'log/axissso.log');
            return $this->fail('No se pudo completar el acceso. Avisa al área de DTI.');
        }

        return $this->locate(getWebRoot());
    }

    /** Página de error simple con salida hacia AXIS. */
    protected function fail(string $message)
    {
        http_response_code(403);
        $back = $this->axissso->axisUrl();
        $link = $back ? '<p><a class="btn" href="' . htmlspecialchars($back) . '">Volver a AXIS</a></p>' : '';
        echo '<!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>AXIS FLOW</title>'
           . '<style>body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;font-family:Inter,Arial,sans-serif;background:linear-gradient(160deg,#061226,#0d3466);color:#fff}'
           . '.c{max-width:460px;padding:36px;border-radius:18px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);text-align:center}'
           . 'h1{font-size:22px;margin:0 0 12px}p{color:#cfe3fa;line-height:1.5}.btn{display:inline-block;margin-top:8px;padding:10px 22px;border-radius:10px;background:#ffb020;color:#1a1a1a;font-weight:700;text-decoration:none}</style></head>'
           . '<body><div class="c"><h1>No se pudo iniciar sesión</h1><p>' . htmlspecialchars($message) . '</p>' . $link . '</div></body></html>';
        return true;
    }
}
