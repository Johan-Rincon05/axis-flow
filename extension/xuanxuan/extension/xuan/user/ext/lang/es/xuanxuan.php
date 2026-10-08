<?php
$lang->user->tokenInvalid  = "Token rechazado, inicie sesión con contraseña.";

if(isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'xuanxuan') != false)
{
    $lang->user->errorDeny = "Sorry, your access to <b>%2\$s</b> of <b>%1\$s</b> is denied. Please contact your Admin to get privileges.";
}
