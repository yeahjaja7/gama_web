<?php 

$consultaCliente = "INSERT INTO cliente (cliente, contacto, telefono) VALUES ('$clienteCot', '$contactoCot', '$telefonoCot')";
$resultado = $mysqli->query($consultaCliente);


if($resultado > 0){
	$consultCliente = "SELECT * FROM cliente where cliente='$clienteCot' and contacto= '$contactoCot' and telefono= '$telefonoCot'";
    $resultado_select = $mysqli->query($consultCliente);
    $row = $resultado_select->fetch_assoc();
    $idCliente = $row["id_cliente"];


    if($idCliente != 0){
    	$consultaPedido = "INSERT INTO pedido (pedido, precio, anticipo) 
    						VALUES ('$pedidoCot', '$precioCot', '$anticipoCot')";
		$resultado2 = $mysqli->query($consultaPedido);

		if($resultado2 > 0){
			$consultPedido = "SELECT * FROM pedido where pedido='$pedidoCot' and precio= '$precioCot' and anticipo= '$anticipoCot'";
		    $resultPedido = $mysqli->query($consultPedido);
		    $rowPedido = $resultPedido->fetch_assoc();
		    $idPedido = $rowPedido["id_pedido"];

		    if($idPedido != 0){
				$consultaCotizacion = "INSERT INTO cotizacion(id_cliente, fecha_cotizacion, id_pedido, vendedor, status_cotizacion, comentario_cotizacion) 
						VALUES ('$idCliente', '$fechaCot', '$idPedido',  '$vendedorCot', '$statusCot','$comentarioCot')";
				$resultado3 = $mysqli->query($consultaCotizacion);


				if($resultado3 > 0){
					echo '<script type="text/javascript">
                		alert("'.$idCliente.'"."'.$idPedido.'");
                	</script>';
				}
				else{
	echo '<script type="text/javascript">
                alert(".: Ocurrio un Error \nIntenteto de nuevo :.");
                </script>';
}
}
		}
    }
}



 ?>