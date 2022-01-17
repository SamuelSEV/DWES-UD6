<?php
    class Dos_ruedas extends Vehiculo {

        private float $cilindrada;

        public function __construct($peso, $color, $cilindrada)
        {
            parent::__construct($peso, $color);
            $this->cilindrada = $cilindrada;
        }

        public function poner_gasolina($litros)
        {
            $this->peso += $litros*1.5;
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
            $this->peso+=$peso_persona+1.5;
        }
        
    }
?>