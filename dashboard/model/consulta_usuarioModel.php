<?php 

require '../assets/librerias/conexion.php';


error_reporting(0);
session_start();
$usuario=$_SESSION['username'];
$idusuario=$_SESSION['iduser'];

$query= "SELECT * FROM usuario WHERE id_usuario='$idusuario'";
$resultado=$mysqli->query($query);

 ?>