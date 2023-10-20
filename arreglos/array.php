<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Modificación contenido de un array
    $nombres = ["Sara", "Matías", "Juán", "Carlos"];
    foreach ($nombres as $key => $value) {
      echo $value . " ";
    } // Sara Matías Juán Carlos
    echo "<br>";

    // Modificar un valor
    $nombres[0] = "María";
    foreach ($nombres as $key => $value) {
      echo $value . " ";
    } // María Matías Juán Carlos
    echo "<br>";

    // Añadir un nuevo elemento
    $nombres[] = "Lucas";
    foreach ($nombres as $key => $value) {
      echo $value . " ";
    } // María Matías Juán Carlos Lucas
    echo "<br>";

    // Eliminar un elemento
    unset($nombres[2]);
    foreach ($nombres as $key => $value) {
      echo $value . " ";
    } // María Matías Carlos Lucas
    echo "<br>";
    echo "<br>";

    // FUNCIONES
    // array_chunk
    $miArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $trozos = array_chunk($miArray, 3);
    print_r($trozos);
    // $trozos contendrá un array de subarrays con 3 elementos cada uno
    echo "<br>";
    echo "<br>";

    // array_slice
    $miArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $parte = array_slice($miArray, 2, 3);
    print_r($parte);
    // $parte contendrá los elementos con índices 2, 3 y 4 (3, 4, 5)
    echo "<br>";
    echo "<br>";

    // Dividir un array en dos usando un bucle
    $miArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $array1 = array();
    $array2 = array();

    foreach ($miArray as $elemento) {
        if ($elemento <= 5) {
            $array1[] = $elemento;
        } else {
            $array2[] = $elemento;
        }
    }
    print_r($array1);
    echo "<br>";
    print_r($array2);
    // $array1 contendrá (1, 2, 3, 4, 5) y $array2 contendrá (6, 7, 8, 9, 10)
    echo "<br>";
    echo "<br>";

    // range crea un array de 20 posiciones
    $numeros = range(1, 20);
    print_r($numeros);
    echo "<br>";
    echo "<br>";
    // shuffle mezcla las posiciones del array dando siempre nuevas posiciones al refrescar la página
    shuffle($numeros);
    print_r($numeros);
    echo "<br>";
    echo "<br>";

    // count cuenta las posiciones de un array
    echo count($numeros);
    echo "<br>";
    echo "<br>";

    // array_merge combina dos o más arrays
    $array1 = array("color"=>"red", 2, 4);
    $array2 = array("a", "b", "color"=>"green", "shape"=>"trapezoid", 4);
    $resultado = array_merge($array1, $array2);
    // El color los sustituye red por green.
    var_dump($resultado);
    echo "<br>";
    echo "<br>";
    print_r($resultado);

     ?>
  </body>
</html>
