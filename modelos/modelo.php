<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function get_carrito_db(){

 include('conn.php');

  $sql = "SELECT * FROM carritos";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $carrito[] = $row;
    }
  } else {
    echo "0 results";
  }

  return $carrito;

  mysqli_close($conn);


}
