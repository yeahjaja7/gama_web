<!DOCTYPE html>
<html>
  <head>
    <?php require '../assets/librerias/head.php'; ?>
  </head>

  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <?php 
            require '../assets/librerias/menu.php'; ?>
    </header>


    <div id="all">
      <div id="content">
     <div class="container">
          <div class="row">
            <div class="col-lg-3"></div>
           <div class="col-lg-6">
             <div class="box">
                <h1>Iniciar Sesion <i class="fa fa-check"></i></h1>
                <hr><br>
                <form action="../controller/login_usuariosController.php" method="post">

                  <div class="form-group">
                    <label for="correo">Correo Electronico  <i class="fa fa-envelope"></i></label>
                    <input id="coreo" name="correo" type="email" class="form-control" placeholder="correo@correo.com" required>
                  </div>
                  <div class="form-group">
                    <label for="contrasena">Contraseña <i class="fa fa-lock"></i></label>
                    <input id="contrasena" type="password" name="contrasena" class="form-control" required>
                  </div>
                        <br>
                  <div class="text-center">
                    <button type="submit" id="enviar" class="btn btn-primary btn-md">Acceder</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div>
    </div>

</body>

<footer>
      <?php require '../assets/librerias/footer.php'; ?>
    </footer>
    <!-- JavaScript files-->
    <?php require '../assets/librerias/files_js.php'; ?>
  </body>
</html>