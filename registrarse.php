<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $data = $_POST;

  if($data['password'] != $data['password2']){
    echo "<h1>Las contraseñas no coinciden</h1>";
    header( "refresh:2;url=registro.php" );
  } else {
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
  }

  unset($data['password2']);
  $data['habilitado'] = true;

  $enlace = mysqli_connect("localhost", "root", "", "shop");
  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  $sql = "INSERT INTO usuarios (dni, nombre, apellido, email, telefono, calle, nro_calle, ciudad, password, habilitado, cod_postal)
  VALUES ('".$data["dni"]."', '".$data["nombre"]."' , '".$data["apellido"]."', '".$data["email"]."' , '".$data["telefono"]."', '".$data["calle"]."' , '".$data["nro_calle"]."' , '".$data["ciudad"]."', '".$data["password"]."', '".$data["habilitado"]."', '".$data["cod_postal"]."' )";

  if (mysqli_query($enlace, $sql)) {
    echo "Usuario Registrado Correctamente!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
  }










  // $hash = '$2y$10$l8kMWWV3wzM5Fa9U3aUelOnIzJQA6t3SeCqo5OIe5RSgzRWc8zK22';
  //
  // if (password_verify('asdasdasd', $hash)) {
  //     echo '¡La contraseña es válida!';
  // } else {
  //     echo 'La contraseña no es válida.';
  // }


 ?>
