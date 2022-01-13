<?php
    class Coche extends Cuatro_ruedas {

        private int $numero_cadenas_nieve;

        public function __construct($peso, $color, $numero_puertas, $numero_cadenas_nieve)
        {
            parent::__construct($peso, $color, $numero_puertas);
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }

        public function añadir_cadenas_nieve($numero) {
            $this->numero_cadenas_nieve += $numero;
        }
    
        public function quitar_cadenas_nieve($numero) {
            $this->numero_cadenas_nieve -= $numero;
        }

        public function getCadenas()
        {
            return $this->numero_cadenas_nieve;
        }
        
    }
?>