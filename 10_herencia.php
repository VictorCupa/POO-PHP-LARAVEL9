<?php
include 'includes/header.php';

class Persona{
    protected  $nombre;
    protected $apellido;
    protected $telefono;
    protected $email;
    public function __construct($nombre, $apellido, $telefono, $email)
    {
        $this->nombre =$nombre;
        $this->apellido =$apellido;
        $this->telefono =$telefono;
        $this->email =$email;
    }
}
class Empleado extends persona 
{
    
    protected $codigoEmpleado;
    protected $departamento;

    public function __construct($nombre, $apellido, $telefono, $email, $codigoEmpleado,$departamento)
    {
        parent::__construct($nombre,$apellido,$telefono,$email);
        $this->codigoEmpleado =$codigoEmpleado;
        $this->departamento =$departamento;
    }
    public function mostrarInformacion()
    {
        echo  "Nombre: ".$this->nombre, " " .$this->apellido, "telefono" .$this->telefono, "correo" .$this->email,
                        "codigo empleado " .$this->codigoEmpleado, "area de trabajo " .$this->departamento;
    }
}

class Proveedor extends Persona
{

}

$victor =new Empleado('victor','cupa',3134662785,'victor.cupa587@gmail.com',0723,'desarrollo');

echo"<pre>";
var_dump($victor);
echo"<pre><br>";
$victor -> mostrarInformacion();