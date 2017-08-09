<?php
$a=20;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muestre asteriscos.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <h3>Algoritmo que pida un numero y muestre en pantalla el mismo numero de asteriscos.</h3>

      <?php

      for ($i=1; $i<=$a; $i++) {
        echo "<h2>* &nbsp</h2>";
      }
      echo "El numero ingresado es: $a";
       ?>

    </div>
  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
