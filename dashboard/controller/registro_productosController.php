<?php 
require '../assets/librerias/conexion.php';

error_reporting(0);
session_start();
//$usuario=$_SESSION['username'];
$idusuario=$_SESSION['iduser'];

$titulo= $_POST['titulo'];
$precio= $_POST['precio'];
$descripcion = $_POST['descripcion'];
$foto_producto= addslashes(file_get_contents($_FILES['foto_producto']['tmp_name']));
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];



require '../model/registro_productoModel.php';

?>