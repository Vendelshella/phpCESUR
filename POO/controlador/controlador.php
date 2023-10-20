<?php
// Llamada al modelo
require 'modelo/clase_equipo.php';
require 'modelo/clase_jugador.php';

// Crear los equipos
$equipoRojo = new Equipo("Rojo");
$equipoAzul = new Equipo("Azul");
// Crear los jugadores
$jugador1 = new Jugador(1, "Pedro", 21, 1.70, "Rojo");
$jugador2 = new Jugador(1, "Lucas", 23, 1.65, "Azul");
$jugador3 = new Jugador(2, "Cristina", 21, 1.70, "Rojo");
$jugador4 = new Jugador(2, "Sandra", 23, 1.65, "Azul");

$equipoRojo->agregarJugador($jugador1);
$equipoRojo->agregarJugador($jugador3);
$equipoAzul->agregarJugador($jugador2);
$equipoAzul->agregarJugador($jugador4);

// Llamada a la vista
require 'vista/mostrar_jugadores_equipos.php'
 ?>
