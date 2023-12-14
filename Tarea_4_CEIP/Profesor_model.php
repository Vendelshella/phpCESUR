<?php
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