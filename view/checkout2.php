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

$token = 'TEST-6049072191308691-112709-5d2fcab68a54d688a7712b2d1963528d-192662218';
require '../vendor/autoload.php';
$precio_final = 500;



// Agrega credenciales
MercadoPago\SDK::setAccessToken($token);

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Artesanias Magicas';
$item->quantity = 1;
$item->unit_price = $precio_final;
$preference->items = array($item);
$preference->save();

error_reporting(0);
session_start();
$idusuario=$_SESSION['iduser'];
?>
 <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Pagar </li>
                </ol>
              </nav>
            </div>

<?php  

require '../assets/librerias/conexion.php';

$query="SELECT * from productos WHERE id_productos='$id_p'";

$resultado=$mysqli->query($query);

while ($row=$resultado->fetch_assoc())
{
?>
            <div id="checkout" class="col-lg-9">
              <div class="box">
                  <h1>DETALLES DE PRODUCTO</h1>
                  <div class="nav flex-column flex-md-row nav-pills text-center"><a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-shopping-cart fa-2x"> </i>¡Tu Artesania esta lista para ser enviada! solo falta unos pasos mas!</a></div>
                  <form action="../controller/compra_producto.php?id=<?php echo $id_p; ?>" method="post">
                  <div class="content py-3">
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="firstname">Tipo de envio</label>
                          <input id="" value="" type="text" class="form-control" name="tipo_envio">
                        </div>
                      </div>
                      
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="company">Domicilio</label>
                          <input id="" type="text" class="form-control" name="domicilio" value="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="street">Código Postal:</label>
                          <input id="" value="" type="text" class="form-control" name="C_P">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    
                      
                      
                    </div>

                    <script 
                    src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                    data-preference-id="<?php echo $preference->id; ?>">
                    </script>
                  </form>
                    <!-- /.row-->
                  </div>
                  <!---Es un Boton XD :V -->
                  

              </div>
              <!-- /.box-->
            </div>
    <?php  } ?>



<?php 
require '../assets/librerias/footer.php';
require '../assets/librerias/files_js.php';
?>