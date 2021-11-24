



<!DOCTYPE html>
<html lang="en">
    <head>
       <?php

       error_reporting(E_ALL);
       ini_set('display_errors', 1);
       include('funciones.php');
       include('head.php');
       $carrito = traer_carrito();
       ?>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include('navbar_logueado.php')?>
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i> Carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($carrito as $item){ ?>
                        <tr>
                          <td class="align-middle"><img src="img/<?php echo $item['imagen'];?>.png"></td>
                          <td class="align-middle text-left"><?php echo $item['nombre'];?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control cantidad" value ="1" placeholder="1" >
                          </td>
                          <td class="align-middle text-center"><span class="precio"><?php echo $item['precio'];?></span></td>
                          <td class="align-middle text-center">$<span class="subtotal"><?php echo $item['precio'];?></span></td>
                        </tr>
                      <?php } ?>


                      </tbody>
                    </table>


                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>

        <section class="contacto-section" id="contacto">
    <footer class="footer small text-center">
    <?php include('footer.php') ?>
    </footer>
  </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
