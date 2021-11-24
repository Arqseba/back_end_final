<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $data = $_POST;

  $enlace = mysqli_connect("localhost", "root", "", "shop");
  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $sql = "SELECT * FROM usuarios WHERE dni= '".$data["dni"]."'";

  $string= "asdasdasdasdasd"."asdasdasd";


  $result = mysqli_query($enlace, $sql);

  if (mysqli_num_rows($result) > 0) {
    while($usuario = mysqli_fetch_assoc($result)) {
      echo "Dni: " . $usuario["dni"]. " - Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
      $hash = $usuario['password'];

      if (password_verify($data['password'], $hash)) {
          echo '¡La contraseña es válida!';
          header("refresh:1;url=http://localhost/shop/index.php");
          session_start();
          $_SESSION['user'] = $usuario['dni'];
          var_dump($_SESSION);
      } else {
          echo 'La contraseña no es válida.';
      }

    }
  } else {
    echo "Su usuario no se encuentra registrado.";
  }

















 ?>
