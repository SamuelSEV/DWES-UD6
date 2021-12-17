<?php

    include_once "ejercicio1.php";
    class Trabajador extends Persona {
        
        private $empresa;

        function __construct($nombre,$DNI,$sexo,$peso,$altura,$empresa)
        {
            parent::__construct($nombre,$DNI,$sexo,$peso,$altura);
            $this->empresa = $empresa;
            
        }

        function getEmpresa() { return $this->empresa; }
        function setEmpresa($empresa) { $this->empresa=$empresa; }
       

        function mostrar() {
            parent::mostrar();
        }

        function mostrarCompleto() {
            echo $this->mostrar() . " empresa: " . $this->empresa; 
        }

        function __toString()
        {
            return parent::__toString() . ". Empresa: " . $this->empresa; 
        }
    }

    $trabajador = new Trabajador("samuel","22222223E","V",80,180,"Ayesa");
    echo $trabajador;

?>