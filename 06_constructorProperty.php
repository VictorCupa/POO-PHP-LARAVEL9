<?php
include 'includes/header.php';

// Constructor property Promotion
class Empleado {
    public function __construct(
        public $codigo_empleado,
        public $nombre,
        public $apellido,
        public $departamento,
        public $cargo,
        public $salaraio,
        public $email,
    )
    {}
}

$victor = new Empleado (565,'victor','cupa','tecnologia','desarrollador Junior',56555,'victor.cupa587@gmail.com');
$jenifer = new Empleado (001,'jenifer','cardenas','tecnologia','desarrolladora junio',56565,'fefy910309@gmail.com');

echo"<pre>";
var_dump($victor);
echo"<pre><br>";

echo"<pre>";
var_dump($jenifer);
echo"<pre><br>";