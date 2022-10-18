<?php

class Compte{
    private $usuari = "Andres";
    private $diners = 5000;

    /**
     * @param string $usuari
     * @param int $diners
     */
    public function __construct($usuari, $diners)
    {
        $this->usuari = $usuari;
        $this->diners = $diners;
    }

    /**
     * @return string
     */
    public function getUsuari()
    {
        return $this->usuari;
    }

    /**
     * @param string $usuari
     */
    public function setUsuari($usuari)
    {
        $this->usuari = $usuari;
    }

    /**
     * @return int
     */
    public function getDiners()
    {
        return $this->diners;
    }

    /**
     * @param int $diners
     */
    public function setDiners($diners)
    {
        $this->diners = $diners;
    }

    public function sacarDinero ($diners){
        $this->diners=$this->diners-$diners;
        return $diners;
    }
    public function meterDinero ($diners){
        $this->diners=$this->diners+$diners;
    }


}
$dinero = new Compte('Roger',5000000);
echo nl2br("dinero inicial: " . $dinero->getDiners()."\n");
$dinero->sacarDinero(1000000);
echo nl2br("sacando 1000000 euros : ".$dinero->getDiners()."\n");
$dinero->meterDinero(1000000);
echo("metiendo  1000000 euros : ".$dinero->getDiners());

?>


