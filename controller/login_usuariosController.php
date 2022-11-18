<?php 

session_start();

require '../assets/librerias/conexion.php';


$usuario = $_POST['correo'];
$contra  = $_POST['contrasena'];

require '../model/login_usuarioModel.php';

?>