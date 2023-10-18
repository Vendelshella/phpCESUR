<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Definición de variable String
    $frase = 'España va bien';
    echo "Aznar dijo: " . $frase . "<br>";

    // Diferencia entre doble comilla y comilla simple
    $numero = 10;
    $fraseDoble = "Hola $numero <br>"; // Hola 10
    $fraseSimple = 'Adiós $numero ' . $numero . '<br>'; // Adiós $numero
    echo $fraseDoble;
    echo $fraseSimple;

    $frase1 = "no me digas nada";
    echo addcslashes($frase1, "a") . "<br>"; // no me dig\as n\ad\a

    $frase2 = "Hola Sonia <br>";
    echo $newFrase2 = chunk_split($frase2, 5, "*") . "<br>";
    echo $fraseRep = str_repeat($frase2, 3) . "<br>";

    $frase3 = "Adios mundo";
    $arrayFrase3 = str_split($frase3);
    // No se imprime con echo sino que hay que utilizar print_r
    print_r($arrayFrase3);
    echo "<br><br>";
    echo strlen($frase3);
     ?>
  </body>
</html>
