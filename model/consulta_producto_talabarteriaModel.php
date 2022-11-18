<?php 

require '../assets/librerias/conexion.php';

$query= "SELECT * FROM productos WHERE categoria ='TALABARTERIA'";
$resultado=$mysqli->query($query);

$query2= "SELECT * FROM productos WHERE categoria ='JOYERIA'";
$resultado2=$mysqli->query($query2);

$query3= "SELECT * FROM productos WHERE categoria ='COSTURERIA'";
$resultado3=$mysqli->query($query3);

$query4= "SELECT * FROM productos WHERE categoria ='LUETERIA'";
$resultado4=$mysqli->query($query4);

$query5= "SELECT * FROM productos WHERE categoria ='ORNOMENTACION'";
$resultado5=$mysqli->query($query5);

$query6= "SELECT * FROM productos WHERE categoria ='ALFARERIA'";
$resultado6=$mysqli->query($query6);

$query7= "SELECT * FROM productos WHERE categoria ='BEBIDAS'";
$resultado7=$mysqli->query($query7);

 ?>