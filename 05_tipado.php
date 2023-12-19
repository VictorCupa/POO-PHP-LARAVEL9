<?php
include 'includes/header.php';


// Tipado
// el tipado consiste en colocar el tipo de dato que pertenece a la variable
class Empleado {
    public $codigo_empleado;
    public $nombre;
    public $apellido;
    public $departamento;
    public $cargo;
    public $salaraio;
    public $email;
    public function __construct(string $codigo_empleado, string $nombre, string $apellido, string $departamento, string $cargo, int $salaraio, string $email)
    {
        $this -> codigo_empleado = $codigo_empleado;
        $this -> nombre = $nombre;
        $this ->apellido = $apellido;
        $this ->departamento = $departamento;
        $this -> cargo = $cargo;
        $this -> salaraio = $salaraio;
        $this -> email = $email;
    }
}

$victor = new Empleado (565,'victor','cupa','tecnologia','desarrollador Junior',56555,'victor.cupa587@gmail.com');
$jenifer = new Empleado (001,'jenifer','cardenas','tecnologia','desarrolladora junio',56565,'fefy910309@gmail.com');

echo"<pre>";
var_dump($victor);
echo"<pre><br>";

echo"<pre>";
var_dump($jenifer);
echo"<pre><br>";