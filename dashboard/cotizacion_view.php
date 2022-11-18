<?php 
require_once 'view/header.php';

?>

<head>
  <link rel="stylesheet" type="text/css" href="assets/librerias/alertify/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="assets/librerias/alertify/css/alertify.css">
  <script src="assets/librerias/alertify/alertify.js"></script>
  <script src="assets/librerias/jquery-3.2.1.min.js"></script>
</head>

  <div class="content-wrapper" id="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Cotizaciones | Print Flash <i class="fas fa-shopping-cart"></i></h1>
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
                <button type="button" class="btn btn btn-success"  data-toggle="modal" data-target="#modal-primary">Añadir Nueva Cotización <i class="fas fa-plus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table id="tabla" class="table table-hover table-striped">
                  <thead>
                  <tr>
                    <th>OS</th>
                    <th>FECHA</th>
                    <th>CLIENTE</th>
                    <th>CONTACTO</th>
                    <th>TELEFONO</th>
                    <th>PEDIDO</th>
                    <th>PRECIO</th>
                    <th>ANTICIPO</th>
                    <th>VENDEDOR</th>
                    <th>STATUS</th>
                    <th>COMENTARIOS</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                  </tr>
                  </thead>
                  <?php require 'model/mostrarCotizacion_model.php'; ?>
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
</div>
    
    
    <div aria-hidden="true" class="modal fade" id="modal-primary">
        <div class="modal-dialog modal-xl" id="modal">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">Nueva Cotización</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form id="frmAgregaCotizacion" method="post">
              
              <div class ="row">
                <div class="col-4">
                  <label for="label">Fecha</label>
                   <input type="date" id="fechaCotView" name="fechaCotView" class="form-control" required>
                </div>

                <div class="col-8">
                  <label for="label">Cliente</label>
                  <input type="text" id="clienteCotView" name="clienteCotView" class="form-control" placeholder="Nombre del Cliente" required>
                </div>

                          
              </div>

              <div class="row">
                <div class="col-8 mt-2">
                  <label for="label">Contacto</label>
                  <input type="text" id="contactoCotView" name="contactoCotView" class="form-control" placeholder="Contacto" required>
                </div>

                <div class="col-4 mt-2">
                  <label for="comment">Teléfono</label>
                  <input type="text" id="telefonoCotView" name="telefonoCotView" class="form-control" placeholder="Teléfono" required>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mt-2">
                  <label for="label">Pedido</label>
                  <input type="text" id="pedidoCotView" name="pedidoCotView" class="form-control" placeholder="Pedido" required>
                </div>
              </div>

              <div class="row">
                <div class="col-3 mt-2">
                  <label for="label">Precio</label>
                  <input type="text" id="precioCotView" name="precioCotView" class="form-control" placeholder="Precio" required>
                </div>

                <div class="col-3 mt-2">
                  <label for="label">Anticipo</label>
                  <input type="text" id="anticipoCotView" name="anticipoCotView" class="form-control" placeholder="Anticipo" required>
                </div>

                <div class="col-6 mt-2">
                  <label for="label">Vendedor</label>
                  <input type="text" id="vendedorCotView" name="vendedorCotView" class="form-control" placeholder="Vendedor" required>
                </div>
              </div>


              <div class="row">
                <div class="col-4 mt-2">
                  <label for="label">Status</label>
                  <select class="form-control" id="statusCotView" name="statusCotView" required>
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

                <div class="col-8 mt-2">
                  <label for="label">Comentario</label>
                  <input type="text" id="comentarioCotView" name="comentarioCotView" class="form-control" placeholder="Comentario" required>
                </div>

                
              </div>


            <div class="modal-footer mt-4">
              <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fas fa-times"></i> Cancelar </button>
              <button id="btnAgregarCotizacion" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Guardar Cotización </button>
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
  
<?php 
require_once 'view/footer.php';

?>

<script src="app.js"></script>