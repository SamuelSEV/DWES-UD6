<?php

    abstract class Vehiculo {

        private float $peso;
        private string $color;

        public function __construct($peso, $color)
        {
            $this->peso = $peso;
            $this->color = $color;
        }
        public function __get($parametro)
        {
            return $this->$parametro;
        }
        public function __set($parametro, $valor)
        {
            $this->$parametro=$valor;
        }

        public function circula() 
        {
            echo "El vehiculo esta circulando";
        }

        abstract function añadir_persona($peso_persona);
       
        public static function ver_atributo($objeto)
        {
            var_dump($objeto);
        }
        
    }

?>