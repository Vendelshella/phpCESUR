<?php

class Precios {
  // Propiedad tipo de la camiseta
  private $tipo = 0;

  // Getters y Setters
  public function setTipo ($tipo){
    $this->tipo = $tipo;
  }
  public function getTipo (){
    return $this->tipo;
  }

  // Calculo del Precio
  public function precio (){
    if ($this->tipo === 1) {
      return 15 . " €";
    }elseif ($this->tipo ===2) {
      return 25 . " €";
    }else {
      return 30 . " €";
    }

  }


}

 ?>
