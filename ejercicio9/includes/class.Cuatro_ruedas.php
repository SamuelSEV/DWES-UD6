<?php
    class Cuatro_ruedas extends Vehiculo {

        private int $numero_puertas;

        public function __construct($peso, $color, $numero_puertas)
        {
            parent::__construct($peso, $color);
            $this->numero_puertas = $numero_puertas;
        }

        public function repintar($color)
        {
            $this->color = $color;
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

        public function añadir_persona($peso_persona) 
        {
            if (parent::setPeso($peso_persona)){
                $this->peso+=$peso_persona;
            }
        } 
    }
?>