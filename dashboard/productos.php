<?php 
require_once 'view/header.php';
require 'model/consulta_productos_usuarioModel.php';
?>

  <!-- Content Wrapper. Contains page content -->







  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Mis Artesanias <i class="fas fa-shopping-cart"></i></h1>
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
                <button type="button" class="btn btn btn-success"  data-toggle="modal" data-target="#modal-primary">Añadir Nueva Artesanía <i class="fas fa-plus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table id="example1" class="table table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Foto del Producto</th>
                    <th>Titulo Artesania</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Stock</th>
                    <th>Categoria</th>
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
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Añadir Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="controller/registro_productosController.php" method="post" enctype="multipart/form-data">
              <center class="mb-1">
                <img id="imagenPrevisualizacion" width="250" height="250" style="border-radius: 1rem;" >
                <br>
                <div class="input-group mt-2">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto_producto" id="file" onchange='uploadFile(this)' accept="image/*" required>
                        <label class="custom-file-label" for="exampleInputFile">Elegir Foto <i class="fas fa-upload"></i></label>
                      </div>
                    </div>
                </center>
              <div class ="row">
              <div class="col-8">
                    <label for="label">Nombre del Producto</label>
                    <input type="text"  name="titulo" class="form-control" placeholder="Pulsera Grano Cafe Tuxpan" required>
                  </div>
                  <div class="col-4">
                    <label for="label">Unidades</label>
                    <input type="text" name="stock" class="form-control" placeholder="Ejemplo..100" required>
                  </div>
                  <div class="col-8 mt-2">
                    <label for="label">Costo por Unidad</label>
                    <input type="text" name="precio" class="form-control" placeholder="150" required>
                  </div>
                  <div class="col-12 mt-2">
                  <label for="comment">Descripcion del producto</label>
                 <textarea class="form-control" name="descripcion" rows="3" id="comment" required></textarea>
                  </div>
                  <div class="form-group col-12 mt-2">
                  <label for="sel1">Categoria:</label>
                  <select class="form-control" id="sel1" name="categoria" required>
                    <option></option>
                    <option>TALABARTERIA</option>
                    <option>JOYERIA</option>
                    <option>COSTURERIA</option>
                    <option>LUETERIA</option>
                    <option>ORNOMENTACIÓN</option>
                    <option>ALFARERIA</option>
                    <option>BEBIDAS</option>
              </select>
              </select>
            </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar <i class="fas fa-times"></i></button>
              <button type="submit" class="btn btn-primary">Guardar Artesania <i class="fas fa-plus"></i></button>
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