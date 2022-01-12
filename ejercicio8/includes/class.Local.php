<?php

    class Local {

        private string $ciudad;
        private string $calle;
        private int $numPlantas;
        private Dimensiones $dimensiones;

        function __construct($ciudad, $calle, $numPlantas, $dimensiones)
        {
            $this->ciudad = $this->checkString($ciudad);
            $this->calle =  $this->checkString($calle);
            $this->numPlantas = $this->checkInteger($numPlantas);
            $this->dimensiones = $this->checkDimensiones($dimensiones);
        }

        private function checkString($string) {

            if (is_string($string)) {
                return $string;
            } else {
                exit("Error, no es una cadena.");
            }

        }

        private function checkInteger($int) {

            if (is_int($int) && $int > 0 && $int < 11) {
                return $int;
            } else {
                exit("Error, no es un numero.");
            }

        }

        private function checkDimensiones($dimensiones) {

            if ($dimensiones instanceof Dimensiones) {
                return $dimensiones;
            } else {
                exit("Error, la dimensiones no se han establecido correctamente.");
            }

        }

        public function __get($name) 
        {
            return $this->$name;
        }
    
        function getDimensiones()
        {
            return $this->dimensiones;
        }

        function __toString()
        {
            return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle<br></p><p>Plantas: $this->numPlantas<br></p><p>Dimensiones: ($this->dimensiones)<br></p>";
        }

        function __clone()
        {
            $this->dimensiones = clone $this->dimensiones;
        }

    }

?>