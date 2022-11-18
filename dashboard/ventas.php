<?php 
require_once 'view/header.php'
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Mis Ventas <i class="fas fa-shopping-cart"></i></h1>
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
                <h3 class="card-title">Administra, Visualiza y Genera reportes de todas tus Ventas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Orden ID</th>
                    <th>Produto/s</th>
                    <th>Cantidad / Unidades</th>
                    <th>Cliente</th>
                    <th>Domicilio</th>
                    <th>Paqueteria</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>000X</td>
                    <td>InternetcExplorer 4.0</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td> <button type="button" class="btn btn-success" data-dismiss="modal">Actualizar <i class="fas fa-sync-alt"></i></button>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Orden ID</th>
                    <th>Produto/s</th>
                    <th>Cantidad / Unidades</th>
                    <th>Cliente</th>
                    <th>Domicilio</th>
                    <th>Paqueteria</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
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
<?php 
require_once 'view/footer.php'
?>