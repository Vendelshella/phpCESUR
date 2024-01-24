<?php

class Equipo {
    private $jugadores = array();

    function __construct (){}

    public function addJug (Jugador $jugador) {
        // Los jugadores se añaden mediante un array asociativo que los vincula con su puntuación
        $this->jugadores[$jugador->getNumJug()] = $jugador->getPtos();
        return $this->jugadores;
    }

    public function getJug () {
        return $this->jugadores;
    }

    public function getTotal () {
        $total = 0;
        foreach ($this->jugadores as $jugador => $ptos) {
            $total += $ptos;
        }
        return $total;
    }
}
