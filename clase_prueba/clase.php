<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Juguete {
        private $nombre = "";
        private $tipo = "";
        public function setNombre ($nombre){
          $this->nombre = $nombre;
        }
        public function setTipo ($tipo){
          $this->tipo = $tipo;
        }
        public function getNombre (){
          return $this->nombre;
        }
        public function getTipo (){
          return $this->tipo;
        }
      }

      $osito = new Juguete();
      // Solo accedemos a las propiedades cuando son publicas
      //$osito->nombre = "Andy";
      $osito->setNombre("Teddy");
      $osito->setTipo("peluche");

      echo "El osito se llama " . $osito->getNombre() . " y es un " . $osito->getTipo();

     ?>
  </body>
</html>
