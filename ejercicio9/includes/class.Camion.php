<?php
    class Camion extends Cuatro_ruedas {

        private int $longitud;
        
        public function __construct($color, $peso, $numero_puertas, $longitud)
        {
            parent::__construct($color, $peso, $numero_puertas);
            $this->longitud = $longitud;
        }

        public function añadir_remolque($longitud_remolque) {
            $this->longitud += $longitud_remolque;
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