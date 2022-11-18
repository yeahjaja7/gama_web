<?php 

require '../assets/librerias/conexion.php';

$id_producto = $_POST['id_prod'];
$query2= "SELECT * FROM productos WHERE id_productos ='$id_producto'";
$resultado2=$mysqli->query($query2);

            
 ?>