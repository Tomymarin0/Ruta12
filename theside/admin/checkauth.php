<?php
require_once __DIR__ . "/../php/services/obtenerHost.php";
require_once __DIR__."../../php/services/Login.php";
session_start();
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: ". getHost() ."/admin/login/index.php");
    # Y salimos del script
    exit();
}
$autenticador = new Login();
if (!empty($_GET["logout"])) $autenticador->deleteSesion();

