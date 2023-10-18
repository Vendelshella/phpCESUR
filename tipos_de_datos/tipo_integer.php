<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    
    // Inicializar variable con un valor por defecto
    $numCoches = 0;
    // Pintar la variable por pantalla
    echo "El numero de coches es " . $numCoches . "<br>";
    echo "El numero de coches es $numCoches<br><br>";
    $numCoches = 10;
    echo "El numero de coches es " . $numCoches . "<br>";
    $cochesAlmacen = 2;
    // Asignar valor mediante otra variable
    $numCoches = $cochesAlmacen;
    echo "El numero de coches es " . $numCoches . "<br>";

    ?>
  </body>
</html>
