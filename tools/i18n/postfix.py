#!/usr/bin/env python3
"""Pasos posteriores a `i18n.php inject`: palabras sueltas en minuscula (verbos del historial de actividad, unidades de tiempo)
que el filtro heuristico considera identificadores y por eso no traduce. Uso: python3 postfix.py <repo>"""
import re,sys
repo=sys.argv[1].rstrip('/') if len(sys.argv)>1 else '.'
VERBS={
 'activated':'activó','added':'agregó','assigned':'asignó','blocked':'bloqueó','cancelled':'canceló','changed':'cambió','closed':'cerró',
 'commented':'comentó','communicated':'comunicó','completed':'completó','confirmed':'confirmó','continued':'continuó','converted':'convirtió',
 'copied':'copió','created':'creó','delayed':'retrasó','deleted':'eliminó','downloaded':'descargó','duscussed':'discutió','edited':'editó',
 'estimated':'estimó','excuted':'ejecutó','executed':'ejecutó','failed':'falló','finished':'finalizó','hid':'ocultó','imported':'importó',
 'installed':'instaló','linked':'vinculó','login':'inició sesión','merged':'fusionó','moved':'movió','opened':'abrió','passed':'aprobó',
 'paused':'pausó','published':'publicó','rejected':'rechazó','reopened':'reabrió','resolved':'resolvió','restarted':'reinició',
 'restored':'restauró','reviewed':'revisó','sorted':'ordenó','started':'inició','stopped':'detuvo','suspended':'suspendió','synced':'sincronizó',
 'tracked':'rastreó','unlinked':'desvinculó','updated':'actualizó','upgraded':'actualizó','uploaded':'subió','verified':'verificó',
 'undeleted':'restauró','logout':'cerró sesión',
}
def sub(path, pattern, fn):
    s=open(path,encoding='utf-8').read(); n=re.subn(pattern,fn,s,flags=re.M); open(path,'w',encoding='utf-8').write(n[0]); return n[1]
n=sub(f'{repo}/module/action/lang/es.php', r"^(\$lang->action->label->\w+\s*=\s*)'([a-z][a-z ]*?)( ?)';",
      lambda m: f"{m.group(1)}'{VERBS[m.group(2).strip()]}{m.group(3)}';" if m.group(2).strip() in VERBS else m.group(0))
print('verbos traducidos:',n)
UNITS=[('module/common/lang/es.php',r"^(\$lang->day\s*=\s*)'days';",r"\1'días';"),
       ('module/todo/lang/es.php',r"^(\$lang->todo->cycleDay\s*=\s*)'days';",r"\1'días';"),
       ('module/admin/lang/es.php',r"^(\$lang->admin->mon\s*=\s*)'month';",r"\1'mes';"),
       ('module/admin/lang/es.php',r"^(\$lang->admin->day\s*=\s*)'day';",r"\1'día';"),
       ('module/block/lang/es.php',r"^(\$lang->block->summary->yesterday\s*=\s*)'<strong>yesterday</strong>,';",r"\1'<strong>ayer</strong>,';")]
for f,p,r in UNITS: sub(f'{repo}/{f}',p,lambda m,r=r: re.sub(p,r,m.group(0)))
