<?php
class Tutor extends Profesor {
    private $alumnos;
    private $mensajes;
    private $fotos;
    private $tareas;

    public function __construct($nombre, $apellidos, $telefono, $direccion, $email, $dni, $segSoc, $nacimiento, $titulacion, $tutorCurso, $tutorLetra, $alumnos = [], $mensajes = [], $fotos = [], $tareas = []){
        parent::__construct($nombre, $apellidos, $telefono, $direccion, $email, $dni, $segSoc, $nacimiento, $titulacion, $tutorCurso, $tutorLetra);
        
        $this->alumnos = $alumnos;
        $this->mensajes = $mensajes;
        $this->fotos = $fotos;
        $this->tareas = $tareas;
    }

    public function asignarAlumnos ($alumno){
        $this->alumnos[] = $alumno;
    }

    public function enviarMensaje($padre, $mensaje, $foto = null, $tarea = null) {
        $padre->recibirMensaje($mensaje, $foto, $tarea);
    }    
 }
