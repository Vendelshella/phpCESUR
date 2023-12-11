<?php
 
echo "<h1>Ejemplo cookies</h1>";

if ( ! empty($_GET['borranombre'])) {
	setcookie('nombre','',time()-100);
	echo 'Cookie borrada<br>';
}

$nombre = '';
if ( empty($_COOKIE['nombre'])) {
	if ( empty($_GET['nombre'])) {
		echo '<form action="'.$_SERVER['PHP_SELF'].'" method="get">';
		echo 'Nombre: <input type="text" name="nombre" /><br>';
		echo '<input type="submit" value="enviar" /><br>';
		echo "</form>";
	} else {
		setcookie('nombre',$_GET['nombre'],time()+3600);
		$nombre = $_GET['nombre'];
		
	}
} else {
	$nombre = $_COOKIE['nombre'];
}
echo "Hola ".$nombre."<br>";
//var_dump( $_COOKIE );
echo "<br>";
echo '<a href="'.$_SERVER['PHP_SELF'].'?borranombre=1">Borrar cookie</a>';