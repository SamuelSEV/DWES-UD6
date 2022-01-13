<?php
    function __autoload($name)
    {
       include_once 'includes/class.' . $name . '.php';
    }

    $vehiculo = new Vehiculo(450, 'Rojo');

    $vehiculo->circula();
    echo "<br>";
    $vehiculo->añadir_persona(50);
    $vehiculo->añadir_persona(60);

    echo "El vehiculo pesa en total: " .  $vehiculo->peso . "kg";
?>