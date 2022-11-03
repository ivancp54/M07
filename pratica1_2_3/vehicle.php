<<<<<<< HEAD
<?php

class Vehicle{
    private $ruedas;
    private $marca;
    private $modelo;
    private $puertas;
    private $motor;
    

    /**
     * @param $ruedas
     * @param $marca
     * @param $modelo
     * @param $puertas
     * @param $motor
     */
    public function __construct($ruedas, $marca, $modelo, $puertas, $motor)
    {
        $this->ruedas = $ruedas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->puertas = $puertas;
        $this->motor = $motor;
    }



    /**
     * @return mixed
     */
    public function getRuedas()
    {
        return $this->ruedas;
    }

    /**
     * @param mixed $ruedas
     */
    public function setRuedas($ruedas)
    {
        $this->ruedas = $ruedas;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * @param mixed $puertas
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function kmRecorreguts()
    {
        return rand(0,100);
    }
    public function vehicleCreat()
    {
        return $this->modelo;
        return $this->motor;
    }


    
    public function __toString()
    {
        return self::class . ": " . $this->marca . " " . $this->modelo . " " . $this->motor . " " . $this->puertas . " " . $this->ruedas . " " ;
    }

}
=======
<?php

class Vehicle{
    private $ruedas;
    private $marca;
    private $modelo;
    private $puertas;
    private $motor;
    

    /**
     * @param $ruedas
     * @param $marca
     * @param $modelo
     * @param $puertas
     * @param $motor
     */
    public function __construct($ruedas, $marca, $modelo, $puertas, $motor)
    {
        $this->ruedas = $ruedas;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->puertas = $puertas;
        $this->motor = $motor;
    }



    /**
     * @return mixed
     */
    public function getRuedas()
    {
        return $this->ruedas;
    }

    /**
     * @param mixed $ruedas
     */
    public function setRuedas($ruedas)
    {
        $this->ruedas = $ruedas;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getPuertas()
    {
        return $this->puertas;
    }

    /**
     * @param mixed $puertas
     */
    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function kmRecorreguts()
    {
        return rand(0,100);
    }
    public function vehicleCreat()
    {
        return $this->modelo;
        return $this->motor;
    }


    
    public function __toString()
    {
        return self::class . ": " . $this->marca . " " . $this->modelo . " " . $this->motor . " " . $this->puertas . " " . $this->ruedas . " " ;
    }

}
>>>>>>> c323b715b8e326f92be9b486c5a2e9f4d2d3c322
?>