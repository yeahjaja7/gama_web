<?php 

require '../assets/librerias/conexion.php';

$consult = "SELECT CO.os, CO.fecha_cotizacion, C.cliente, C.contacto, C.telefono, PE.pedido, PE.precio, PE.anticipo, CO.vendedor, CO.status_cotizacion, CO.comentario_cotizacion FROM cotizacion as CO 
INNER JOIN cliente as C ON CO.id_cliente=C.id_cliente
INNER JOIN pedido AS PE ON CO.id_pedido=PE.id_pedido";
    $resultado_select = $mysqli->query($consult);
    
    while($row =$resultado_select-> fetch_assoc()){


 ?>

    <tbody>
                  <tr>
                
                    <td><?php echo $row['os']; ?></td>
                    <td><?php echo $row['fecha_cotizacion']; ?></td>
                    <td><?php echo $row['cliente']; ?></td>
                    <td><?php echo $row['contacto']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['pedido']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['anticipo']; ?></td>
                    <td><?php echo $row['vendedor']; ?></td>
                    <td><?php echo $row['status_cotizacion']; ?></td>
                    <td><?php echo $row['comentario_cotizacion']; ?></td>
                  </tr>
                  </tbody><?php } ?>
