<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muestre la Multiplicacion de dos numeros.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <h3>Algoritmo que pida dos numeros y multiplique todos los numeros que van desde el primero hasta el segundo.</h3>

      <?php
      $M=1;

      for ($i=25; $i<=30 ; $i++) {
        $M=$M*$i;
        echo "<h2>$i &nbsp</h2>";
      }
      echo "La multiplicacion de los numeros es: $M";
       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
