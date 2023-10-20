<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo $jugador1->getInfo();
    echo "<br>";
    echo $jugador2->getInfo();
    echo "<br>";
    echo $jugador3->getInfo();
    echo "<br>";
    echo $jugador4->getInfo();
    echo "<br>";
    echo "<br>";

    echo "Equipo Azul: <br>";
    foreach ($equipoAzul->getJugadores() as $jugador) {
      echo $jugador->getNombre();
      echo "<br>";
    }
    echo "<br>";
    
    echo "Equipo Rojo: <br>";
    foreach ($equipoRojo->getJugadores() as $jugador) {
      echo $jugador->getNombre();
      echo "<br>";
    }
     ?>
  </body>
</html>
