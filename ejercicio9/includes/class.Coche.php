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

        public function setCadenas($numero_cadenas_nieve)
        {
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        }

        public function __get($parametro) 
        {
            if(property_exists(get_class(),$parametro)){
                return $this->$parametro;
            }
            else {
                return parent::__get($parametro);
            }
            
        }

        public function __set($parametro, $value) 
        {
            if(property_exists(get_class(),$parametro)){
                
                $this->$parametro=$value;
            }
            else {
                parent::__set($parametro, $value);
            }
            
        }
        
    }
?>