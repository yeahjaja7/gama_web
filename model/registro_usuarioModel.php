<?php 

require '../assets/librerias/conexion.php';

$buscar = "SELECT correo FROM usuario WHERE correo='$correoUser'";
$result = $mysqli->query($buscar);

$row = $result->fetch_assoc();
$correo =  $row['correo'];

if($contrasenaUser == $contrasenaUser2){
    if($correo == $correoUser){

    echo '<script type="text/javascript">
                alert(".: Este correo ya esta registrado :.");
                window.location.href="../view/registro_view.php";
                </script>';

    }
    else{
        $consulta = "INSERT INTO usuario (nombres, apellidos, correo, contrasena, codigo_postal, telefono, foto_perfil) 
                VALUES ('$nombresUser','$apellidosUser', '$correoUser', '$contrasenaUser', '$codigo_postalUser', '$telefonoUser', '$foto_perfilUser')";
        $resultado = $mysqli->query($consulta);


        if($resultado > 0){
            echo '<script type="text/javascript">
                    alert(".: El registro se realizo con Exito!! :.");
                    window.location.href="../view/loginView.php";
                    </script>';
        }
        else{
            echo '<script type="text/javascript">
                    alert(".: Ocurrio un Error :( :.");
                    window.location.href="../view/registro_view.php";
                    </script>';
        }
    }
    }
else{
    echo '<script type="text/javascript">
                    alert(".: Ocurrio un Error \nLas contraseñas no coinciden :.");
                    window.location.href="../view/registro_view.php";
                    </script>';
}

