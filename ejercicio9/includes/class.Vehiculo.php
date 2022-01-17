<?php
    abstract class Vehiculo implements IVehiculo{

        private float $peso;
        private string $color;
        protected static int $numero_cambio_color = 0;

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

        public function setPeso($nuevoPeso) {
            
            if (($this->peso + $nuevoPeso) <= 2100) {
                $this->peso += $nuevoPeso;
                return true;
            } else {
                echo "El peso total del vehiculo no puede superar los 2100kg. <br>";
                return false;
            }
        }

        public function setColor($color) {
            $this->color = $color;
            self::$numero_cambio_color += 1;
        }
       
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
            if(property_exists($objeto, 'numero_cambio_color')) {
                echo "Numero cambios de color: " . self::$numero_cambio_color;
                echo "<br>";
            }
        }
    }
?>