<?php
// Clase Área
class Area {
  // Propiedades
  private $base = 0;
  private $altura = 0;

  // Setters
  public function setBase ($base){
    $this->base = $base;
  }
  public function setAltura ($altura){
    $this->altura = $altura;
  }

  // Getters
  public function getBase (){
    return $this->base;
  }
  public function getAltura (){
    return $this->altura;
  }

  // Calculo del área
  public function calculoArea (){
    return $this->altura * $this->base;
  }

}

 ?>
