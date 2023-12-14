<?php
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