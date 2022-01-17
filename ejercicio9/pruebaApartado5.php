<?php
    
    function __autoload($name)
    {
    include_once 'includes/class.' . $name . '.php';
    }

    $coche = new Coche(2100, 'Verde',4 ,2);
    $coche->añadir_cadenas_nieve(2);
    $coche->añadir_persona(80);
    $coche->setColor('Azul');
    $coche->quitar_cadenas_nieve(4);
    $coche->setColor('Negro');
    Vehiculo::ver_atributo($coche);

?>