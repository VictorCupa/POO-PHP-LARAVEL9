<?php
include 'includes/header.php';

class Empleado {
    public $codigo_empleado;
    public $nombre;
    public $apellido;
    public $departamento;
    public $cargo;
    public $salaraio;
    public $email;
    
}

$empleado = new Empleado;
$empleado ->codigo_empleado=0723;
$empleado ->nombre="VICTOR";
$empleado ->apellido="CUPA";
$empleado ->departamento="TECNOLOGIA";
$empleado ->cargo="DESARROLLADOR-JUNIOR";
$empleado ->salaraio=2522;
$empleado ->email="VIKTOR587@gmail.com";

echo"<pre>";
var_dump($empleado);
echo"<pre>";

class Car{
    public $marca;
    public $modelo;
    public $tipoCarro;
    public $color;
    public $cilindraje;
}

$car = new car;
$car -> marca ="RENAULT";
$car -> modelo = 2023;
$car -> tipoCarro="CAMIONETA";
$car -> color ="BLANCO";
$car -> cilindraje ="1600 CC";

echo"<pre>";
var_dump($car);
echo "<pre>";