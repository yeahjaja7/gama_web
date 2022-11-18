<?php   

error_reporting(0);
session_start();
$usuario=$_SESSION['username'];
$idusuario=$_SESSION['iduser'];
//require '../model/Validacion_loginIndex.php';
?>

<?php require '../model/consulta_producto_talabarteriaModel.php'; 

?>
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
                          
                          <a href="loginView.php">
                            <button class="btn btn-primary" >Iniciar sesión </button>
                          </a>
                        </li>
                        <li class="breadcrumb-item">
                          
                          <a href="registro_view.php">
                            <button class="btn btn-outline-primary" >Regístrarte</button>
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
                          
                          <a href="../assets/librerias/cerrar_sesion.php">
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


    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-3">

              <!--
              *** MENU CATEGORIA ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categorías</h3>
                </div>
                <div class="card-body" >
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="tienda.php" class="nav-link">TALABARTERIA</a></li>
                    <li><a href="joyeriaView.php" class="nav-link">JOYERIA</a></li>
                    <li><a href="costureriaView.php" class="nav-link">COSTURERIA</a></li>
                    <li><a href="luteriaView.php" class="nav-link">LUETERIA</a></li>
                    <li><a href="ornomentacionView.php" class="nav-link">ORNOMENTACION</a></li>
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




            <div class="col-lg-9" style="width: 100%; height: ;">
              <div class="box">
                <h4>Talabartería</h4>
              </div>
              <!--
              *** CREAR UN PRODUCTO DE SEGUN SU CATEGORIA ***
              _________________________________________________________
              -->

              <div class="row products">
                

                  <?php 
                  if(mysqli_num_rows($resultado) > 0){


                  foreach ($resultado as $valores) {
                    
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

                
<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detalles del Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php require '../model/detalle_productoModel.php';
            while($row = $resultado2->fetch_assoc()){

             ?>
            <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data">
              <center class="mb-1">
                <img id="imagenPrevisualizacion" width="250" height="250" style="border-radius: 1rem;" >
                <br>
                
                </center>
              <div class ="row">
              <div class="col-12">
                    <label for="label">Nombre del Producto: <?php echo $row['titulo']; ?></label>
                  </div>
                  <div class="col-12">
                    <label for="label">Unidades disponibles: <?php echo $row['stock']; ?></label>
                  </div>
                  <div class="col-8 mt-2">
                    <label for="label">Costo por Unidad: <?php echo $row['precio']; ?></label>
                  </div>
                  <div class="form-group col-12 mt-2">
                  <label for="">Categoria: <?php echo $row['categoria']; ?></label>
                  
            </div>
                  <div class="col-12 mt-2">
                  <label for="">Descripcion del producto: <?php echo $row['descripcion']; ?></label>
                  </div>
                  <?php } ?>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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


                <!--
                *** TERMINA CREAR UN PRODUCTO DE SEGUN SU CATEGORIA ***
                _________________________________________________________
                -->
    
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