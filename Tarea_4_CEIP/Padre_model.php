<?php
class Padre extends Persona {
    private $hijos;
    private $mensajesTutor;

    public function __construct($nombre, $apellidos, $telefono, $direccion, $email, $hijos = [], $mensajesTutor = []){
        parent::__construct($nombre, $apellidos, $telefono, $direccion, $email);
        
        $this->hijos = $hijos;
        $this->mensajesTutor = $mensajesTutor;
    }

    public function agregarHijo($hijo) {
        $this->hijos[] = $hijo;
    }

    public function recibirMensaje($mensajeTutor, $foto = null, $tarea = null){
        // Cada mensaje se almacena en un formato de array asociativo con tres campos: 'mensaje', 'foto' y 'tarea'.
        $this->mensajesTutor[] = array(
            'mensaje' => $mensajeTutor,
            'foto' => $foto,
            'tarea' => $tarea
        );
    }

    public function verMensajes (){
        return $this->mensajesTutor;
    }
 }
