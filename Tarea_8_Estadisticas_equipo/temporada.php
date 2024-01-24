<?php

include 'jugador.php';
include 'equipo.php';

$equipo = new Equipo();

for ($i=0; $i < 10; $i++) { 
    // Crear 10 jugadores
    $dorsalJug = "Jugador " . $i . " -> ";
    $jugador = new Jugador($dorsalJug);
    echo $dorsalJug . " ";

    // Añadimos a cada jugador una puntuación aleatoria entr 20 y 100 puntos
    $numero_aleatorio = rand(20, 100);
    $jugador->addPtos($numero_aleatorio);
    // Error intencionado al añadir una puntuación negativa:
    // $jugador->addPtos(-1);
    echo $jugador->getPtos();
    echo "<br>";
    
    // Añadir jugadores al equipo con puntuaciones aleatorias
    $equipo->addJug($jugador);
    
}
echo "<br>";

echo "Puntuación total: " . $equipo->getTotal();

