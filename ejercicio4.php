<?php

    class Vivienda {
        
        private string $tipoVivienda;
        private float $valorMercado;

        public function __construct($tipoVivienda, $valorMercado)
        {
            $this->tipoVivienda=$tipoVivienda;
            $this->valorMercado=$valorMercado;
        }

        function __get($atributo) { 
            return "El VALOR DE ATRIBUTO ES: " . $this->$atributo; 
        }
        function __set($atributo, $valor) { 
            switch ($atributo) {
                case 'tipoVivienda':
                    $this->$atributo=$valor;
                    break;
                case 'valorMercado':
                    if ($valor>0) {
                        $this->$atributo=$valor;
                    }
                    else {
                        echo "El valor no puede ser menor a 0";
                    }
                    break;  
            }    
        }  
    }

    $miCasa =  new Vivienda("Casa", 2500);
    echo $miCasa->tipoVivienda;
    echo "<br>";
    echo $miCasa->valorMercado;
    $miCasa->tipoVivienda="Piso";
    echo "<br>";
    echo $miCasa->tipoVivienda;
    echo "<br>";
    $miCasa->valorMercado=-5;
    echo "<br>";
    echo $miCasa->valorMercado;

   

?>