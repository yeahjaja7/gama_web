  <!DOCTYPE html>
<html>
  <head>
    <?php require '../assets/librerias/head.php'; ?>
  </head>
  <body>


    <!-- menu-->
    <header class="header mb-5">
      <?php require '../assets/librerias/header.php';
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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item"><a href="#">My orders</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Order # 1735</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-2    "></div>
            <div id="customer-order" class="col-lg-8">
              <div class="box">
                  <center>
                  <i class="fa fa-check-circle fa-4x" style="color: green;"></i>
                <h2>¡Perfecto! tu pedido esta preparandose</h2>
                </center>
                <br>
                <p class="lead">Tu pedido fue enviado a tu correo: <strong>correo@gmail.com</strong></p>
                <p class="text-muted">Si tienes dudas con tu envio o productos  <a href="contact.html">contactanos</a>, Estamos para ayudarte en todo momento de inicio a fin</p>
                <hr>
                <div class="table-responsive mb-4">
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="">Articulos</th>
                        <th>Unidades</th>
                        <th>Costo por unidad</th>
                        <th>Costo Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">Pulsera Base de Granos de Cafe </a></td>
                        <td>1</td>
                        <td>$120.00</td>
                        <td>$120.00</td>
                      </tr>
                     
                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="5" class="text-right">Envio</th>
                        <th>$99.00</th>
                      </tr>
                      <tr>
                        <th colspan="5" class="text-right">Total Pagado</th>
                        <th>$219.00</th>
                      </tr>
                   
                      <tr>
                        <th colspan="5" class="text-right">Metodo de pago</th>
                        <th>Mercado Pago</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.table-responsive-->
                  <div class="col-lg-6">
                    <h2>Direccion de Envio <i class="fa fa-arrow-right"></i></h2>
                    <p>Ana Perez Lopez<br>73000e<br>CDMX.Mexico<br>Insurgentes N°21 Colonia Centro<br>5555555555
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php 
require '../assets/librerias/footer.php';
require '../assets/librerias/files_js.php';
?>