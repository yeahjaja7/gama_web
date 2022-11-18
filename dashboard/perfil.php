<?php 
require 'view/header.php';

require 'model/consulta_usuarioModel.php';
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-user"></i> Mi perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil de usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <?php while ($row = $resultado->fetch_assoc()) {
                // code...
              ?>
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="data:img/jpg;base64, <?php echo base64_encode($row['foto_perfil']) ?>"
                        alt="perfil">
                  </div>

                  <h3 class="profile-username text-center"><?php echo $row['nombres']; ?></h3>

                  
                  
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              

              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row" action="" method="POST">
                        <label for="inputName" class="col-md-2 col-form-label">Nombre</label>
                        <div class="col-md-3">
                          <input type="text" required class="form-control" id="inputName" placeholder="Nombre (s)" name="Nombre_completo" value="<?php echo $row['nombres']; ?>" >
                        </div>
                        <div class="col-md-7">
                          <input type="text" required class="form-control" id="inputName" placeholder="Apellidos" name="Apellidos" value="<?php echo $row['apellidos']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-5">
                          <input type="email" required class="form-control" id="inputEmail" placeholder="Correo" name="Correo" value="<?php echo $row['correo']; ?>">
                        </div>
                        <div class="col-sm-5">
                          <input type="text" required class="form-control" id="inputTelefono" placeholder="Telefono" name="Telefono" value="<?php echo $row['telefono']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputContraseña" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                          <input type="text" required class="form-control" id="inputContraseña" placeholder="Contraseña" name="text" value="<?php echo $row['contrasena']; ?>">
                        </div>
                      </div>
                     
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">C.P</label>
                        <div class="col-sm-3">
                          <input type="text"   class="form-control" id="inputSkills" placeholder="Códgio postal" value="<?php echo $row['codigo_postal']; ?>" required>
                        </div>
                       
                      </div>
                     <?php } ?>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer>
    <?php 
require_once 'view/footer.php'
?>
  </footer>