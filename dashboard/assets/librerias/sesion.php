<?php 

session_start();
  if (!isset($_SESSION['username'])) {
      
      echo'
        <script>
          alert(".: ADVERTENCIA :. \n Por favor debes iniciar sesion");
          window.location="../view/loginView.php";
        </script>
      ';
      
      session_destroy();
      die();  
  } 
error_reporting(0);
session_start();
$usuario=$_SESSION['username'];
$idusuario=$_SESSION['iduser'];


 ?>