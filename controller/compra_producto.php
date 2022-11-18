<?php

error_reporting(0);
session_start();
$idusuario=$_SESSION['iduser'];


require '../assets/librerias/conexion.php';


$cantidad=$_POST['cantidad'];
$tipo_envio=$_POST['tipo_envio'];
$domicilio=$_POST['domicilio'];
$C_P=$_POST['C_P'];

$id_p=$_GET['id'];





$query= "INSERT INTO compra (cantidad,status,tipo_envio,domicilio,C_P,id_usuario,id_productos) 
values ('$cantidad','en proceso','$tipo_envio','$domicilio','$C_P','$idusuario','$id_p')";


    $resultado =$mysqli->query($query);
    if ($resultado>0)
    {
    
        header('');
    }
    else
    {
       
        header('');
    }

?>