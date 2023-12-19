<?php
include 'includes/header.php';

// Métodos

class Empleado {
    public $codigo_empleado;
    public $nombre;
    public $apellido;
    public $departamento;
    public $cargo;
    public $salaraio;
    public $email;
    public function __construct($codigo_empleado, $nombre, $apellido, $departamento, $cargo, $salaraio, $email)
    {
        $this -> codigo_empleado = $codigo_empleado;
        $this -> nombre = $nombre;
        $this ->apellido = $apellido;
        $this ->departamento = $departamento;
        $this -> cargo = $cargo;
        $this -> salaraio = $salaraio;
        $this -> email = $email;
    }
    public function nombreEmpleado()
    {
        echo $this->nombre." ". $this->apellido;
    }
    public function cargoEmpleado()
    {
        return $this->cargo;
    }
}

$victor = new Empleado (565,'victor','cupa','tecnologia','desarrollador Junior',56555,'victor.cupa587@gmail.com');
//$victor ->nombreEmpleado();
$jenifer = new Empleado (001,'jenifer','cardenas','tecnologia','desarrolladora junio',56565,'fefy910309@gmail.com');
//$jenifer ->nombreEmpleado();


echo"<pre>";
var_dump($victor);
echo"<pre><br>";

echo"<pre>";
var_dump($jenifer);
echo"<pre><br>";

echo $victor ->nombreEmpleado();
echo "<br>";
echo $cargo1= $victor->cargoEmpleado();