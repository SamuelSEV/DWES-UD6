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
       
        static public function ver_atributo($objeto)
        {
            if(isset($objeto->peso)) {
                echo "Peso: " . $objeto->peso;
                echo "<br>";
            }
            if (isset($objeto->color)) {
                echo "Color: " . $objeto->color;
                echo "<br>";
            }
            if (property_exists(get_parent_class($objeto), 'numero_puertas')) {
                echo "Puertas: " . $objeto->numero_puertas;
                echo "<br>";
            }
            if (property_exists($objeto, 'cilindrada')) {
                echo "Cilindrada: " . $objeto->cilindrada;
                echo "<br>";
            }
            if (property_exists($objeto, 'longitud')) {
                echo "Longitud " . $objeto->longitud;
                echo "<br>";
            }
            if (property_exists($objeto, 'numero_cadenas_nieve')) {
                echo "Cadenas: " . $objeto->numero_cadenas_nieve;
                echo "<br>";
            }
 
        }
        
    }

?>