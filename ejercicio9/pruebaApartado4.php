<?php
    function __autoload($name)
    {
       include_once 'includes/class.' . $name . '.php';
    }
   
    $moto = new Dos_ruedas(1550, 'transparente',500);
    $moto->añadir_persona(70);
    echo "El vehiculo pesa en total: " .  $moto->peso;
    //$moto->color = 'Verde';
    //$moto->cilindrada = 1000;
    $atrubutosmoto->ver_atributos($moto);
?>
