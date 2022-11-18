<?php 

require '../assets/librerias/conexion.php';

$nombresUser     = $_POST['nombres'];
$apellidosUser     = $_POST['apellidos'];
$correoUser     = $_POST['correo'];
$contrasenaUser      = $_POST['contrasena'];
$contrasenaUser2      = $_POST['contrasena2'];
$codigo_postalUser     = $_POST['codigo_postal'];
$telefonoUser     = $_POST['telefono'];
$foto_perfilUser      = $_POST['foto_perfil'];

require '../model/registro_usuarioModel.php';

 ?>