<?php

/* 
 * Guardar el nombre del usuario en una cookie por una hora,
 * en caso de que el usuario no haya introducido un nombre se
 * le devuelve al formulario.
*/

$user_name = $_POST["user_name"];

if (!empty($user_name)){
    if (isset ($_POST["send"])) {
        setcookie("user_name", $user_name, time()+3600);
        header('Location: pag3.php');
    }
} else {
    header('Location: pag1.php');
}

?>
