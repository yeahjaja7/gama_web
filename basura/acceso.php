<?php

session_start();

require '../assets/librerias/conexion.php';


$usuario = $_POST['correo'];
$contra  = $_POST['contrasena'];

$validar_login = mysqli_query($mysqli, "SELECT * FROM usuario WHERE correo='$usuario' and contrasena='$contra' ");

while ($row = $validar_login->fetch_assoc()) {

    $variableID = $row["nombres"];
    $variableID2 = $row["id_usuario"];
}




if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['username'] = $variableID;
    $_SESSION['iduser'] = $variableID2;
    echo '
    <script>
    alert(".: Bienvenid@ '.$variableID.' :.");
    window.location="../view/tienda.php";
    </script> ';


} else {

    echo '
    <script>
    alert(".: ERROR :. \n El usuario no existe, verifique los datos de acceso.");
    window.location="../view/loginView.php";
    </script> ';
}