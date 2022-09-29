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
        public function sacarDinero ($diners){
            $this->diners=$this->diners-$diners;
            return $diners;
        }

    }

    echo "hola";


