<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    La información recibida es:
    <br>
    <?php
    print_r($_POST);
    echo "<br>";
    echo "El nombre recibido es: " . $_POST["nombre"];
     ?>
  </body>
</html>
