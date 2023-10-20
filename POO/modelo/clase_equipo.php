<?php
class Equipo{
  private $nombreEquipo = "";
  private $jugadores = [];

  function __construct($nombreEquipo){
    $this->nombreEquipo = $nombreEquipo;
  }

  //Acceso al nombre del equipo
  public function agregarJugador($jugador){
    return $this->jugadores[] = $jugador; // Agregar jugadores al array
  }

  public function getJugadores(){
    return $this->jugadores;
  }
}
 ?>
