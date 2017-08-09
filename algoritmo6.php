<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabla de Multiplicar.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <h3>Algoritmo que muestre la tabla de multiplicar de cualquier numero.</h3>

      <?php
      $u=5;

      for ($i=0; $i<=10; $i++) {
        $M=$i*$u;
        echo "<h2>$u x $i = $M &nbsp</h2>";
      }
       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
