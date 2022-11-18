<?php 

$query = "INSERT INTO productos (titulo,precio,descripcion,foto_producto,stock,categoria,id_usuario) 
values ('$titulo','$precio','$descripcion','$foto_producto','$stock','$categoria','$idusuario') ";
$result = $mysqli->query($query);

if($result > 0){
        echo '<script type="text/javascript">
                alert(".: El Producto fue agregado con Exito!! :.");
                window.location.href="../productos.php";
                </script>';
    }
    else{
        echo '<script type="text/javascript">
                alert(".: Ocurrio un Error \nIntenteto de nuevo :.");
                window.location.href="../productos.php";
                </script>';
    }

 ?>