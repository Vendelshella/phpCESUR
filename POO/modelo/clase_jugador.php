
    <?php

    // Definimos la clase jugador
    class Jugador{
      // Propiedades
      private $numero = 0;
      private $nombre = "";
      private $edad = 0;
      private $estatura = 0;
      private $equipo = "";

      // Constructor
      function __construct($numero, $nombre, $edad, $estatura, $equipo){
        $this->numero = $numero;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->estatura = $estatura;
        $this->equipo = $equipo;
      }

      // Métodos Getters
      public function getInfo(){
        return "Jugador: $this->nombre, Edad: $this->edad, NumCamiseta: $this->numero, Estatura: $this->estatura, Equipo: $this->equipo";
      }
      public function getNombre(){
        return "Jugador: $this->nombre";
      }
    }

    ?>
