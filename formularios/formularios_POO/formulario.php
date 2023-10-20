<?php
// Incluimos la librería Clase Area
include 'area.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Información recibida:
    <br>
    <?php
    // Creamos un objeto Area
    $areaForm = new Area();

    // Se le asignan a las propiedades los valores recogidos en el formulario
    $areaForm->setBase($_POST["base"]);
    $areaForm->setAltura($_POST["altura"]);

    // Imprimimos por pantalla el resultado haciendo uso de la función de calculoArea
    echo "El área del rectángulo es: " . $areaForm->calculoArea();

     ?>
  </body>
</html>
