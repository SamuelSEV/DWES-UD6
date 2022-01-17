<?php
    function __autoload($name)
    {
       include_once 'includes/class.' . $name . '.php';
    }
   
    $moto = new Dos_ruedas(1550, 'transparente',500);
    $moto->añadir_persona(70);
    echo "El vehiculo pesa en total: " .  $moto->peso;
    echo "<br>";
    $moto->color = 'Verde';
    $moto->cilindrada = 1000;
    echo "Moto: <br>";
    Vehiculo::ver_atributo($moto);
    echo "<br>";
    echo "Camion: <br>";
    $camion = new Camion(6000, 'blanco', 0, 5);
    $camion->añadir_persona(84);
    $camion->repintar('azul');
    $camion->numero_puertas += 2;
    Vehiculo::ver_atributo($camion);
?>
