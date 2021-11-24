<!DOCTYPE html>
<html lang="en">
    <head>
       <?php 
       session_start(); var_dump($_SESSION);
       include('head.php');?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">login</h1>
                    <form method="post" action="loguearse.php">
                      <input type="text" name="dni" class="form-control mb-4" placeholder="DNI" id="name">
                      <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña" id="phone">
                      <button type="submit" class="btn btn-login btn-block">Ingresar</button>
                      <h5 class="mt-3">No tenés cuenta? <a href="registro.php">Registrate! </a></h5>
                    </form>
                </div>
              </div>


            </div>
        </header>
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
