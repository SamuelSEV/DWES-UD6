<?php

    class LocalComercial extends Local {

        private string $razonSocial;
        private string $numLicencia;

        public function __construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia)
        {
            parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones);
            $this->razonSocial = $this->checkString($razonSocial);
            $this->numLicencia = $this->checkString($numLicencia);
        }

        private function checkString($string) {

            if (is_string($string)) {
                return $string;
            } else {
                exit("Error, no es una cadena.");
            }

        }
        
        function __toString()
        {
            return parent::__toString() . "<p><datos del local></p><p>Razón Social: $this->razonSocial<br></p><p>Número de Licencia: $this->numLicencia<br></p>";
        }

    }

?>