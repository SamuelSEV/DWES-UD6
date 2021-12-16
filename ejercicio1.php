<?php
    class Persona {
        private $nombre;
        private $DNI;
        private $sexo;
        private $peso;
        private $altura;

        function __construct($nombre,$DNI,$sexo,$peso,$altura)
        {
            $this->nombre = $nombre;
            $this->DNI = $DNI;
            $this->sexo = $sexo;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        function getNombre() { return $this->nombre; }
        function setNombre($nombre) { $this->nombre=$nombre; }
        function getDNI() { return $this->DNI; }
        function setDNI($DNI) { $this->DNI=$DNI; }
        function getsexo() { return $this->sexo; }
        function setsexo($sexo) { $this->sexo=$sexo; }
        function getpeso() { return $this->peso; }
        function setpeso($peso) { $this->peso=$peso; }
        function getaltura() { return $this->altura; }
        function setaltura($altura) { $this->altura=$altura; }

        function mostrar() {
            echo "Soy " . $this->nombre . " con DNI: " .  $this->DNI . ", sexo:" . $this->sexo . ", peso:" . $this->peso . ", altura:" . $this->altura; 
        }
    }

    $persona = new Persona("samuel","22222223E","V",80,180);
    $persona->mostrar();

    $persona->setNombre("Maria");
    $persona->setDNI("33333333U");
    $persona->setsexo("M");
    $persona->setpeso(60);
    $persona->setaltura(160);
    echo "<br>";
    echo $persona->getNombre("Maria");
    echo "<br>";
    echo $persona->getDNI("33333333U");
    echo "<br>";
    echo $persona->getsexo("M");
    echo "<br>";
    echo $persona->getpeso(60);
    echo "<br>";
    echo $persona->getaltura(160);
    echo "<br>";

    $persona->mostrar();

?>