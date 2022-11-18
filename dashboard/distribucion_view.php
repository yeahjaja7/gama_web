<?php 
require_once 'view/header.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Distribución | Print Flash <i class="fas fa-shopping-cart"></i></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Panel</a></li>
              <li class="breadcrumb-item active">Mis Ventas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <section>
   <div class="card">
              <div class="card-header">
                <div class="ml-0">
                <button type="button" class="btn btn btn-success"  data-toggle="modal" data-target="#modal-primary">Añadir Nueva Distribución <i class="fas fa-plus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table id="example1" class="table table-hover table-striped">
                  <thead>
                  <tr>
                    <th>OS</th>
                    <th>OP</th>
                    <th>FECHA</th>
                    <th>CLIENTE</th>
                    <th>CONTACTO</th>
                    <th>TELEFONO</th>
                    <th>PEDIDO</th>
                    <th>PRECIO</th>
                    <th>STATUS</th>
                    <th>COMENTARIOS</th>
                    <th>NR</th>
                    <th>FACTURA</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr><?php while($row = $resultado->fetch_assoc()){
               ?>
                    <td><center><img src="data:img/jpg;base64, <?php echo base64_encode($row['foto_producto']);  ?>" alt="" height="100px"></center></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                  </tr><?php } ?>
                  </tbody>
                </table>
              </div>

              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
    <!-- /.content -->

    
    
    <div class="modal fade" id="modal-primary">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">Nueva Distribución</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="frmAgregaDistribucion" method="post">
              
              <div class ="row">
                <div class="col-2">
                  <label for="label">OS:</label>
                   <input type="text"  id="osDistView"  name="osDistView" class="form-control" placeholder="OS" required>
                </div>

                <div class="col-2">
                  <label for="label">OP:</label>
                  <input type="text" id="opDistView" name="opDistView" class="form-control" placeholder="OP" required>
                </div>

                
                <div class="col-2">
                  <label for="label">Fecha de Distribución:</label>
                   <input type="date"  id="fechaDistView" name="fechaDistView" class="form-control" required>
                </div>

                <div class="col-6">
                  <label for="label">Cliente:</label>
                  <input type="text" id="clienteDistView" name="clienteDistView" class="form-control" placeholder="Nombre del Cliente" required>
                </div>

                          
              </div>

              <div class="row">
                <div class="col-6 mt-2">
                  <label for="label">Contacto:</label>
                  <input type="text" id="contactoDistView" name="contactoDistView" class="form-control" placeholder="Contacto" required>
                </div>

                <div class="col-6 mt-2">
                  <label for="comment">Teléfono:</label>
                  <input type="text" id="telefonoDistView" name="telefonoDistView" class="form-control" placeholder="Teléfono" required>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mt-2">
                  <label for="label">Pedido:</label>
                  <input type="text" name="pedidoDistView" name="pedidoDistView" class="form-control" placeholder="Pedido" required>
                </div>
              </div>

              <div class="row">
                <div class="col-2 mt-2">
                  <label for="label">Precio:</label>
                  <input type="text" name="precioDistView" name="precioDistView" class="form-control" placeholder="Precio" required>
                </div>

                <div class="col-3 mt-2">
                  <label for="label">Status:</label>
                  <select class="form-control" id="statusDistView" name="statusDistView" required>
                    <option selected disabled>SELECCIONAR</option>
                    <option>COTIZACIÓN</option>
                    <option>SEGUIMIENTO VENTA</option>
                    <option>DISEÑO</option>
                    <option>PRODUCCIÓN</option>
                    <option>STAND BY</option>
                    <option>MOSTRADOR/RUTA</option>
                    <option>ENTREGADO</option>
                    <option>CANCELADO</option>
                    <option>STOCK</option>
                  </select>
                </div>

                <div class="col-7 mt-2">
                  <label for="label">Comentario:</label>
                  <input type="text" id="comentarioDistView" name="comentarioDistView" class="form-control" placeholder="Comentario" required>
                </div>

                
              </div>

              <div class="row">
                <div class="col-6 mt-2">
                  <label for="label">NR:</label>
                  <input type="text" id="nrDistView" name="nrDistView" class="form-control" placeholder="NR" required>
                </div>

                <div class="col-6 mt-2">
                  <label for="comment">Factura:</label>
                  <input type="text" id="facturaDistView" name="facturaDistView" class="form-control" placeholder="Factura" required>
                </div>
              </div>


            <div class="modal-footer mt-4">
              <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fas fa-times"></i> Cancelar </button>
              <button id="btnAgregarDistribucion" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Guardar Distribución</button>
            </div>

          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  </div>
  </div>
  <script>
    const $seleccionArchivos = document.querySelector("#file"),
  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
</script>
<?php 
require_once 'view/footer.php'
?>