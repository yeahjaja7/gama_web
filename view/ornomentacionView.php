<?php require '../model/consulta_producto_talabarteriaModel.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require '../assets/librerias/head.php'; ?>
  </head>
  <body>


    <!-- menu-->
    <header class="header mb-5">
      <?php 
            require '../assets/librerias/menu.php'; ?>
    </header>



    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="assets/librerias/cerrar_sesion.php">Cerrar Sesion</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">

              <!--
              *** MENU CATEGORIA ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categorías</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="tienda.php" class="nav-link">TALABARTERIA</a></li>
                    <li><a href="joyeriaView.php" class="nav-link">JOYERIA</a></li>
                    <li><a href="costureriaView.php" class="nav-link">COSTURERIA</a></li>
                    <li><a href="luteriaView.php" class="nav-link">LUETERIA</a></li>
                    <li><a href="ornomentacionView.php" class="nav-link">ORNOMENTACIÓN</a></li>
                    <li><a href="alfareriaView.php" class="nav-link">ALFARERIA</a></li>
                    <li><a href="bebidasView.php" class="nav-link">BEBIDAS</a></li>
                  </ul>
                </div>
              </div>
              <!--
              *** TERMINA EL MENU CATEGORIA ***
              _________________________________________________________
              -->
              
            </div>




            <div class="col-lg-9">
              <div class="box">
                <h4>Ornomentación</h4>
              </div>
              <!--
              *** CREAR UN PRODUCTO DE SEGUN SU CATEGORIA ***
              _________________________________________________________
              -->

              <div class="row products">
                <?php 
                  if(mysqli_num_rows($resultado5) > 0){


                  foreach ($resultado5 as $valores) {
                    
                   echo '<div class="col-lg-4 col-md-6">
                   
                  <div class="product" style="">
                    <div class="flip-container" >
                      <div class="flipper" >
                        <div class=""><a href="#"><img src="data:img/jpg;base64,'.base64_encode($valores['foto_producto']).'" alt="" class="" width="100%" height="250px"></a></div>
                        
                      </div>
                    </div>
                    <div class="text">
                      <h3><a href="">'.$valores['titulo'].'</a></h3>
                      <p class="price"> 
                        <del></del> '.$valores['precio'].'
                      </p>
                      <p class="buttons"><a class="btn btn-primary" href="checkout.php?id='.$valores['id_productos'].'">Detalles</a></p>
                    </div>
                  </div>

                  </div>'."\r";

 }}
 else{
  echo '<div class="col-lg-12 col-md-12">
  <div class="box">

  No hay Productos Disponibles.
  </div></div>';
 } ?>


                
                
                
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <?php require '../assets/librerias/footer.php'; ?>
    </footer>
    <!-- JavaScript files-->
    <?php require '../assets/librerias/files_js.php'; ?>
  </body>
</html>