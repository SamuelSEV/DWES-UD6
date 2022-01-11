<?php

    include_once("class.localcomercial.php");

    class Cine extends LocalComercial {

        private int $aforoSala;

        function __construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia, $aforoSala)
        {
            parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia);
            $this->aforoSala = $this->checkAforo($aforoSala);
        }

        function checkAforo($aforoSala) {

            if (is_int($aforoSala) && $aforoSala > 0) {
                return $aforoSala;
            } else {
                exit("Error, el aforo debe ser mayor a 0.");
            }

        }

        function __toString()
        {
            return parent::__toString() . "<p><datos del local comercial></p><p>Aforo: $this->aforoSala<br></p>";
        }

        function getAforoSala() {
            return $this->aforoSala;
        }

    }

?>