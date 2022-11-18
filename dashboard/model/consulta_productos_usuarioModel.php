<?php 

require '../assets/librerias/conexion.php';

error_reporting(0);
session_start();
$idusuario=$_SESSION['iduser'];

$query= "SELECT * FROM productos WHERE id_usuario='$idusuario'";
$resultado=$mysqli->query($query);

 ?>