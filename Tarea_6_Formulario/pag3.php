<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>

    <?php

    /*
     * Saludar al usuario con el nombre almacenado en la cookie y
     * borrar la cookie cuando el usuario hace clic en el enlace.
    */

    $user_name = $_COOKIE['user_name'];

    if (!empty($_GET['borranombre'])) {
        setcookie('user_name', $user_name,time()-100); // Borrar la cookie
        header('Location: pag1.php');
    }else {
        echo "Hola $user_name";
    }
    
    echo "<br>";
    echo '<a href="'.$_SERVER['PHP_SELF'].'?borranombre=1">Borrar cookie</a>';
    
    ?>

</body>
</html>