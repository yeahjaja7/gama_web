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
            
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Contactanos</h1>
                <hr>
                <br><br>
                <div class="row">
                  <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Direccion</h3>
                    <p>Av Tecnologico S/N<br>Cd. Lazaro Cardenas<br>CP: 73049<br>Puebla, Mexico<br></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-phone"></i> Telefonos</h3>
                    <p class="text-muted">Contactanos via Whatsapp o Llamanos en Horarios de atencion de 9:00AM - 9:00PM </p>
                    <p><strong><i class="fa fa-whatsapp"></i> +52 746 111 1111</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-envelope"></i> Correo Electronico</h3>
                    <p class="text-muted">Envianos tus quejas y sugerencias </p>
                    <ul>
                      <li><strong><a href="mailto:">itsvc.tecnm.edu.mx</a></strong></li>
                    </ul>
                  </div>
                  <!-- /.col-sm-4-->
                </div>
                <!-- /.row-->
                <hr>
               <center>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zUe-zEYukN98jtC0a_e_VxCXfc3GIB0I" width="100%" height="480"></iframe>
              </center>
                <hr>
                <h2>Contactanos</h2>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Nombre</label>
                        <input id="firstname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Apellidos</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Titulo de Mensaje</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar Mensaje</button>
                    </div>
                  </div>
                  <!-- /.row-->
                </form>
              </div>
            </div>
            <!-- /.col-md-9-->
            


            <div class="col-lg-3">
              
            </div>




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