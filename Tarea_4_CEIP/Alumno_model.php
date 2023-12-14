<?php
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
