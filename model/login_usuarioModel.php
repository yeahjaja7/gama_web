<?php 
require '../assets/librerias/conexion.php';

$validar_login = mysqli_query($mysqli, "SELECT * FROM usuario WHERE correo='$usuario' and contrasena='$contra' ");

while ($row = $validar_login->fetch_assoc()) {

    $variableID = $row["nombres"];
    $variableID2 = $row["id_usuario"];
}




if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['username'] = $variableID;
    $_SESSION['iduser'] = $variableID2;
    $_SESSION['log']="ok";
    echo '
    <script>
    alert(".: Bienvenid@ '.$variableID.' :.");
    window.location="../index.php";
    </script> ';


} else {

    echo '
    <script>
    alert(".: ERROR :. \n El usuario no existe, verifique los datos de acceso.");
    window.location="../view/loginView.php";
    </script> ';
}
 ?>