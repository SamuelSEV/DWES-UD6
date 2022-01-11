<?php

    class Dimensiones {

        private float $alto;
        private float $ancho;
        private float $largo;

        public function __construct($alto, $ancho, $largo)
        {
            $this->alto = $this->setAlto($alto);
            $this->ancho = $this->setAncho($ancho);
            $this->largo = $this->setLargo($largo);
        }

        function setAlto($alto)
        {
            if (is_float($alto) && $alto > 1) {
                return $alto;
            } else {
                exit("Error, la altura debe ser mayor a 1.");
            }
            
        }

        function getAlto()
        {
            return $this->alto;
        }

        function setAncho($ancho)
        {
            if (is_float($ancho) && $ancho > 1) {
                return $ancho;
            } else {
                exit("Error, el ancho debe ser mayor a 1.");
            }
        }

        function getAncho()
        {
            return $this->ancho;
        }

        function setLargo($largo)
        {
            if (is_float($largo) && $largo > 1) {
                return $largo;
            } else {
                exit("Error, el largo debe ser mayor a 1.");
            }
        }

        function getLargo()
        {
            return $this->largo;
        }

        function __toString()
        {
            return "alto=$this->alto,ancho=$this->ancho,largo=$this->largo";
        }
    }

?>