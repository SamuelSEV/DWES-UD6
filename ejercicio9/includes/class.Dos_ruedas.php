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

        public function getCilindrada()
        {
            return $this->cilindrada;
        }
        public function añadir_persona($peso_persona) 
        {
            $this->peso+=$peso_persona+1.5;
        }
        
    }
?>