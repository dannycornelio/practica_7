<?php
require 'Conexion.php';

class Alumnos extends Conexion{
    public $codigo;
    public $primer_nombre;
    public $segundo_nombre;
    public $primer_apellido;
    public $segundo_apellido;
    public $email;
    public $telefono;
    public $fecha_nacimiento;


    public function __construct($args = [] )
    {
        $this->codigo = $args['codigo'] ?? null;
        $this->primer_nombre = $args['primer_nombre'] ?? '';
        $this->segundo_nombre = $args['segundo_nombre'] ?? '';
        $this->primer_apellido = $args['primer_apellido'] ?? '';
        $this->segundo_apellido = $args['segundo_apellido'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->fecha_nacimiento = $args['fecha_nacimiento'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO datos_estudiante(codigo, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, email, telefono, fecha_nacimiento) values('$this->codigo','$this->primer_nombre','$this->segundo_nombre','$this->primer_apellido','$this->segundo_apellido','$this->email','$this->telefono','$this->fecha_nacimiento')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
