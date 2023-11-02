<?php
 // Crear la clase Persona que será el molde del resto de objetos Alumno, Padre y Profesor.
 class Persona {
    protected $nombre;
    protected $apellidos;
    protected $telefono;
    protected $direccion;
    protected $email;

    public function __construct($nombre, $apellidos, $telefono, $direccion, $email){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->email = $email;
    }
 }

 class Profesor extends Persona {
    protected $dni;
    protected $segSoc;
    protected $nacimiento;
    protected $titulacion;
    protected $tutorCurso;
    protected $tutorLetra;

    public function __construct($nombre, $apellidos, $telefono, $direccion, $email, $dni, $segSoc, $nacimiento, $titulacion, $tutorCurso, $tutorLetra){
        parent::__construct($nombre, $apellidos, $telefono, $direccion, $email);
        
        $this->dni = $dni;
        $this->segSoc = $segSoc;
        $this->nacimiento = $nacimiento;
        $this->titulacion = $titulacion;
        $this->tutorCurso = $tutorCurso;
        $this->tutorLetra = $tutorLetra;
    }
    
    public function asignarTutorClase ($curso, $letra){
        $this->tutorCurso = $curso;
        $this->tutorLetra = $letra;
    }
 }

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
        // Los parámetros $foto y $tarea son opcionales y se les asignará null como valor predeterminado
        $padre->recibirMensaje($mensaje, $foto, $tarea);
    }    
 }

 class Alumno extends Persona {
    private $matricula;
    private $dni;
    private $nacimiento;
    private $padres;

    public function __construct($nombre, $apellidos, $telefono, $direccion, $email, $matricula, $dni, $nacimiento, $padres = []){
        parent::__construct($nombre, $apellidos, $telefono, $direccion, $email);
        
        $this->matricula = $matricula;
        $this->dni = $dni;
        $this->nacimiento = $nacimiento;
        $this->padres = $padres;
    }
 }

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
