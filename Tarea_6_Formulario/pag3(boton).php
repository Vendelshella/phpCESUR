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
     * borrar la cookie cuando el usuario hace clic en el botón.
    */

    $user_name = $_COOKIE['user_name'];

    if (!empty($_POST['destroy_cookie'])) {
        setcookie('user_name', $user_name,time()-100); // Borrar la cookie
        header('Location: pag1.php');
    }else {
        echo "Hola $user_name";
    }
    
    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Destruir cookie" name="destroy_cookie">
    </form>

</body>
</html>