<?php

    interface IEquipoFutbol{
        public function getNumeroJugadores();
        public function juegaPartido();
    }

    interface ICampeonato {
        public function nombreCampeonato();
    }

    class EquipoFutbol implements IEquipoFutbol, ICampeonato {

        private int $numJugadores;
        private string $nombreEquipo;
        private string $nomCampeonato;

        public function __construct($numJugadores, $nombreEquipo, $nomCampeonato)
        {
            $this->numJugadores=$numJugadores;
            $this->nombreEquipo=$nombreEquipo;
            $this->nomCampeonato=$nomCampeonato;
        }

        function __get($atributo) { 
            return $this->$atributo; 
        }
        function __set($atributo, $valor) { 
            
            $this->$atributo=$valor;  
        }

        public function juegaPartido()
        {
            echo $this->nombreEquipo . " VICTORIA";
        }

        public function getNumeroJugadores()
        {
            return $this->numJugadores;
        }

        public function nombreCampeonato()
        {
            return $this->nomCampeonato;
        }
    }

    $equipo = new EquipoFutbol(15, "Betis", "LIGA");

    echo $equipo->getNumeroJugadores();
    echo "<br>";
    $equipo->juegaPartido();
    echo "<br>";
    echo $equipo->nombreCampeonato();
?>