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
            return $this->$parametro;
        }
        public function __set($parametro, $valor)
        {
            $this->$parametro=$valor;
        }
    
    }
?>