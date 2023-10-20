<?php
  include "precios.php";
  $p=new Precios();
  $p->setTipo(3);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Camiseta tipo 3</title>
  </head>
  <body>
    <div class="titulo">
      Camiseta tipo 3
    </div>
    <div class="camiseta_grande">
      <img src="img/camiseta3.png" alt="">
    </div>
    <div class="precio">
      <p>El precio por camiseta es de: <?php echo $p->precio(); ?></p>
    </div>
  </body>
</html>
