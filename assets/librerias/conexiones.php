<?php
$mysqli = new mysqli("localhost", "root", "", "print_flash");
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
    echo 'Conexion Fallida: ', mysqli_connect_error();
    exit();
}
?>