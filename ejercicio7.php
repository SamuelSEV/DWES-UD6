<?php
    abstract class FiguraGeometrica{
        private string $color;
        abstract function Dibuja();
        abstract function Area();
    }

    class Cuadrado extends FiguraGeometrica {

        private float $lado;
    
        public function __construct($lado, $color)
        {
            $this->lado = $lado;
            $this->color = $color;
        }
    
        function Dibuja()
        {
            echo "Cuadrado color: " . $this->color . ".<br>";
        }
    
        function Area()
        {
            return pow($this->lado, 2);
        }
    }
    
    class Triangulo extends FiguraGeometrica  {
    
        private float $base;
        private float $altura;
    
        public function __construct($base, $altura, $color)
        {
            $this->base = $base;
            $this->altura = $altura;
            $this->color = $color;
        }
    
        function Dibuja()
        {
            echo "Triangulo color: " . $this->color . ".<br>";
        }
    
        function Area()
        {
            return ($this->base*$this->altura)/2;
        }
    }
    
    class Circulo extends FiguraGeometrica  {
    
        private float $radio;
    
        public function __construct($radio, $color)
        {
            $this->radio = $radio;
            $this->color = $color;
        }
    
        function Dibuja()
        {
            echo "Circulo color: " . $this->color . ".<br>";
        }
    
        function Area()
        {
            return pi()*pow($this->radio, 2);
        }
    }
    
    $cuadrado = new Cuadrado(20, "Amarillo");
    $triangulo = new Triangulo(5, 10, "Rojo");
    $circulo = new Circulo(8, "Azul");
    
    echo "CUADRADO";
    echo "<br>";
    $cuadrado->Dibuja();
    echo "Area: " . $cuadrado->Area() . "<br><br>";
    
    echo "TRIANGULO";
    echo "<br>";
    $triangulo->Dibuja();
    echo "Area: " . $triangulo->Area() . "<br><br>";
    
    echo "CIRCULO";
    echo "<br>";
    $circulo->Dibuja();
    echo "Area: " . $circulo->Area() . "<br><br>";
    
?>