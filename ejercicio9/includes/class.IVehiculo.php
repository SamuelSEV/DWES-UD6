<?php

    interface IVehiculo {

        public function circula();

        public function setColor($color);

        public function __get($parametro);

        public function __set($parametro, $valor);

        public static function ver_atributo($objeto);
    }

?>