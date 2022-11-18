<?php 
require 'model/Validacion_loginIndex.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artesanias Mágicas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    
</head>
<body>
	<header>
		  <nav class="navbar navbar-expand-lg">
        <div class="container">

          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler">
              <span class="sr-only">Navegacion</span>
              <i class="fa fa-align-justify"></i>
            </button>

            

          </div>


          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.php" class=""><img src="assets/images/logo.png" width="15%" alt=""></a></li>
              <li class="nav-item"><a href="index.php" class="nav-link">INICIO</a></li>
              <li class="nav-item"><a href="view/tienda.php" class="nav-link">PRODUCTOS<b class="caret"></b></a></li>
              <li class="nav-item"><a href="view/nosotros.php" class="nav-link">NOSOTROS</a></li>
              <li class="nav-item"><a href="view/contactoView.php" class="nav-link">CONTACTO</a></li>
              <li class="nav-item"><a href="dashboard/index.php" class="nav-link">VENDER</a></li>
            </ul>

            

          </div>
        </div>
      </nav>
	</header>
<br>



  <?php
        if($_SESSION['log'] != "ok") {?>
        <div id="all">
                  <div id="content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          
                          <a href="view/loginView.php">
                            <button class="btn btn-primary" >Iniciar sesión</button>
                          </a>
                        </li>
                        <li class="breadcrumb-item">
                          
                          <a href="view/registro_view.php">
                            <button class="btn btn-outline-primary">Regístrarte</button>
                          </a>
                        </li>
                      </ol>
                    </nav>     <!-- breadcrumb-->  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      <?php 
      }else 
      {
        if($_SESSION['log']="ok") {?>
        <div id="all">
                  <div id="content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          
                          <a href="assets/librerias/cerrar_sesion.php">
                            <button class="btn btn-primary" >Cerrar sesión</button>
                          </a>
                        </li>
                        <li><p class="nav-link">Hola <?php echo $_SESSION['username'];?></p></li>
                        
                        
                      </ol>
                    </nav>     <!-- breadcrumb-->  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } 
      }?>

<br>
<div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                
                <div class="item">
                  <img src="assets/images/alfareros.jpg" width="100%"  class="img-fluid">
                  <div class="carousel-caption">
                    <strong><p style="color: #000000; font-size: 34px;">Bienvenido a Artesanias Mágicas</p2></strong>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/bebidas.jpg" width="100%"  class="img-fluid">
                  <div class="carousel-caption">
                    <p style="color: #FFFFFF; font-size: 34px;">Compra segura!!</p>
                  </div>
                </div>
                <div class="item">
                  <img src="assets/images/costura.jpg" width="100%"  class="img-fluid">
                </div>
                <div class="item">
                  <img src="assets/images/JOYERIA.jpg" width="100%"  class="img-fluid">
                </div>
                <div class="item">
                  <img src="assets/images/LUTERIA.png" width="100%"  class="img-fluid">
                </div>
                <div class="item">
                  <img src="assets/images/ORNOMENTACION.jpg" width="100%"  class="img-fluid">
                </div>
                <div class="item">
                  <img src="assets/images/talabarteria.jpg" width="100%"  class="img-fluid">
                </div>
                
              </div>
            </div>
          </div>
        </div>





        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">100% Artesanal</a></h3>
                  <p class="mb-0">Hecho a mano significa hecho con el corazón</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Mejores ofertas</a></h3>
                  <p class="mb-0">Precios comodos y muchas ofertas</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">Satisfacción en nuestros productos</a></h3>
                  <p class="mb-0">Aqui encuentras lo que buscas y con la mejor calidad en artesanias</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>









	<footer>
		<div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h4 class="mb-3">Páginas</h4>
            <ul class="list-unstyled">
              <li><a href="">Acerca de</a></li>
              <li><a href="contactoView.php">Contacto</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="../view/loginView.php">Iniciar Sesión</a></li>
              <li><a href="../view/loginView.php">Registrate</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-4 col-md-4">
            <h4 class="mb-3">Categorias TOP</h4>
            <ul class="list-unstyled">
              <li><a href="view/tienda.php">TALABARTERIA</a></li>
              <li><a href="view/joyeriaView.php">JOYERIA</a></li>
              <li><a href="view/costureriaView.php">COSTURERIA</a></li>
              <li><a href="view/luteriaView.php">LUETERIA</a></li>
              <li><a href="view/ornomentacionView.php">ORNOMENTACION</a></li>
              <li><a href="view/alfareriaView.php">ALFARERIA</a></li>
              <li><a href="view/bebidasView.php">BEBIDAS</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-4 col-md-4">
            <h4 class="mb-3">Dónde puedes encontrarnos</h4>
            <p><strong>Av. Tecnologico</strong><br>S/N<br>Col. El Huasteco<br>Cd. Lazaro Cardenas<br><strong>Venustiano Carranza, Pue.</strong></p>
          </div>

          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
  
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">ARTESANIAS PUEBLOS MÁGICOS ©2021 - DERECHOS RESERVADOS</p>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/front.js"></script>
	</footer>
</body>
</html>