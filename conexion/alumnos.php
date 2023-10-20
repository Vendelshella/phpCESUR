<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conexión a alumnos</title>
  </head>
  <body>
    <?php
    // Objeto de conexión
    $mysqli = new mysqli("localhost", "root", "", "alumnos");

    // Manejo de errores
    if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else {
      // Establecer la codificación de caracteres
      $mysqli->set_charset("utf8");
      echo "Conexión exitosa";
      echo "<br>";
    }

    // Consulta
    $resultado = $mysqli->query("SELECT * FROM alumnos");

    // Número de filas en la tabla alumnos
    echo "El número de alumnos es: " . $resultado->num_rows . "<br>";
    echo "<br>";

    // Información en arreglo de todas las filas
    for ($i=0; $i < $resultado->num_rows ; $i++) {
      $fila = $resultado->fetch_assoc();
      print_r ($fila);
      echo "<br>";
    }
    echo "<br>";

    echo "Crear una nueva consulta para recorrer las filas: <br>";
    // Nueva consulta para volver a recorrer las filas de la tabla
    $resultado = $mysqli->query("SELECT * FROM alumnos");
    for ($i=0; $i < $resultado->num_rows ; $i++) {
      $fila = $resultado->fetch_assoc();
      echo $fila['ID'] . ". " . $fila['Nombre'];
      echo "<br>";
    }
    echo "<br>";

    // Otra opción
    echo "Guardar los resultados en un arreglo:";
    echo "<br>";
    /*En lugar de ejecutar la consulta nuevamente,
    puedes almacenar los datos en un arreglo y
    luego recorrer ese arreglo en el segundo bucle.*/

    $resultado = $mysqli->query("SELECT * FROM alumnos");

    // Obtener todos los resultados en un arreglo
    $alumnos = [];
    while ($fila = $resultado->fetch_assoc()) {
        $alumnos[] = $fila;
    }
    print_r($alumnos);
    echo "<br>";

    // Recorrer el arreglo en el segundo bucle
    for ($i = 0; $i < count($alumnos); $i++) {
        echo $alumnos[$i]['ID'] . ". " . $alumnos[$i]['Nombre'] . " " . $alumnos[$i]["Apellidos"];
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

    // Consulta con WHERE
    echo "Consulta de un solo resultado:";
    echo "<br>";
    $resultado = $mysqli->query("SELECT * FROM alumnos WHERE ID=1");
    $fila = $resultado->fetch_assoc();
    echo $fila["Nombre"];

     ?>
  </body>
</html>
