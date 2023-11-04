<?php
require_once "../../php/services/Login.php";


$autenticador = new Login();


# Nota: no estamos haciendo validaciones
$usuario = $_POST["form-username"];
$palabra_secreta = $_POST["form-password"];
# Luego de haber obtenido los valores, ya podemos comprobar:
if ($autenticador->createSesion($usuario,$palabra_secreta)) {
    header("Location: ../app/sliders.php");
} else {
    header("Location: ./index.php?q=2");
}
?>