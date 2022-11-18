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
require'../vendor/autoload.php';
$precio_final = 219;



// Agrega credenciales
MercadoPago\SDK::setAccessToken($token);

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Artesanias Magicas ECOM';
$item->quantity = 1;
$item->unit_price = $precio_final;
$preference->items = array($item);
$preference->save();
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
            <div id="checkout" class="col-lg-9">
              <div class="box">
                  <h1>Envio y Pagar</h1>
                  <div class="nav flex-column flex-md-row nav-pills text-center"><a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-shopping-cart fa-2x"> </i>¡Tu Artesania esta lista para ser enviada! solo falta unos pasos mas!</a></div>
                  <form action="enviado.php" method="post">
                  <div class="content py-3">
                    <div class="row">   
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstname">Nombre y Apellidos</label>
                          <input id="" type="text" class="form-control" value="Ana Perez Lopez">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastname">Codigo Postal</label>
                          <input id="" type="text" class="form-control" value="73000">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="company">Ciudad / Estado</label>
                          <input id="" type="text" class="form-control" value="CDMX.Mexico">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="street">Calle Completa</label>
                          <input id="" type="text" class="form-control" value="Insurgentes N°21 Colonia Centro">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                          <label for="city">Telefonos de Contacto</label>
                          <input id="" type="text" class="form-control" value="5555555555">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                  </div>
                  <!---Es un Boton XD :V -->
                  <script 
                    src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
                    data-preference-id="<?php echo $preference->id; ?>">
                    </script>
                    </form>
                  <div class="box-footer d-flex justify-content-between"><a href="basket.html" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Cancelar y Regresar</a>
                  </div>

              </div>
              <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
              <div id="order-summary" class="card">
                <div class="card-header">
                  <h3 class="mt-4 mb-4">Detalles del Pedido</h3>
                </div>
                <div class="card-body">
                  <p class="text-muted">Revisa que todo este bien para poder iniciar el proceso de pago y envio</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Pulsera Base de Granos de Cafe 1 (Unidad)</td>
                          <th>$120.00</th>
                        </tr>
                        <tr>
                          <td>Costos de Envio</td>
                          <th>$99.00</th>
                        </tr>
                        <tr class="total">
                          <td>Total</td>
                          <th>$219.00</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-lg-3-->
          </div>
        </div>
      </div>
    </div>
    
<?php 
require '../assets/librerias/footer.php';
require '../assets/librerias/files_js.php';
?>