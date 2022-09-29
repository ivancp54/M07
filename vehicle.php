<?php

class Vehicle{
    private $ruedas;
    private $marca;
    private $modelo;
    private $puertas;
    private $motor;

    function __construct(){}

    function __construct($marca){
        $this->$marca = $marca;
    }

    function __construct($marca, $ruedas, $modelo, $puertas, $motor){
        $this->$ruedas = $ruedas;
        $this->$modelo = $modelo;
        $this->$marca = $marca;
        $this->$puertas = $puertas;
        $this->$motor = $motor;

    }
    
    public function __toString()
    {
        return self::class . ": " . $this->marca . " " . $this->modelo . " " . $this->motor . " " . $this->puertas . " " . $this->ruedas . " " ;
    }

}


?>