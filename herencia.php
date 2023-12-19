<?php

include 'includes/header.php';

class Vehiculo {
    protected $marca;
    protected $tipoVehiculo;
    protected $color;
    protected $modelo;
    protected $combustible;

    public function __construct($marca, $tipoVehiculo,$color,$modelo,$combustible)
    {
        $this->marca = $marca;
        $this->tipoVehiculo = $tipoVehiculo;
        $this->color = $color;
        $this->modelo = $modelo;
        $this->combustible = $combustible;
    }
} 
class automovil extends Vehiculo {

    protected $numeroMotor;
    protected $matricula;
    protected $ciudadMatricula;
    protected $numPasajeros;

    public function __construct($marca, $tipoVehiculo, $color, $modelo, $combustible,$numeroMotor,$matricula,$ciudadMatricula,$numPasajeros)
    {
        parent::__construct($marca, $tipoVehiculo,$color,$modelo,$combustible);
        $this->numeroMotor=$numeroMotor;
        $this->matricula=$matricula;
        $this->ciudadMatricula=$ciudadMatricula;
        $this->numPasajeros=$numPasajeros;
    }
    public function informacionVehiculo()
    {
        echo "MARCA: ".$this->marca," ","Tipo de vehiculo: ".$this->tipoVehiculo," ","Color del vehiculo: ".$this->color,
              " ","Modelo del vehiculo: ".$this->modelo," ","Tipo de combustible; ".$this->combustible," ",
              "Numero motor: ".$this->numeroMotor,"Matricula del vehiculo: ".$this->matricula," ","Ciudad de Matricula: ".$this->ciudadMatricula,
              " ","Numero de pasajeros: ".$this->numPasajeros;
    }
}
$duster=new automovil("Renault","Camioneta","Negro",2024,"Gasolina",22654654654,"VIK 587","BOGOTA",7);

echo"<pre>";
var_dump($duster);
echo"<pre><br>";
$duster -> informacionVehiculo();