<?php
function protocolo_web()
{
    $protocol =  "http://";
    if (
        //straight
        isset($_SERVER['HTTPS']) && in_array($_SERVER['HTTPS'], ['on', 1])
        ||
        //proxy forwarding
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    }
        return $protocol ;
}

function getHost() {
    return protocolo_web() . $_SERVER["HTTP_HOST"];
}