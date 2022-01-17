<?php
    function __autoload($name)
    {
       include_once 'includes/class.' . $name . '.php';
    }
    $coche = new Coche(650,'Azul' , 5, 0);
    $coche->añadir_persona(700);

    echo "El vehiculo pesa en total: " .  $coche->peso . "kg y es de color " . $coche->color;
    echo "<br>";
    $coche->repintar('Amarillo');
    $coche->añadir_cadenas_nieve(3);

    echo "El vehiculo es color: " .  $coche->color . " y lleva  " . $coche->numero_cadenas_nieve . " cadenas";
    echo "<br>";
    $moto = new Dos_ruedas(30, 'Marron',500);

    echo "El vehiculo pesa en total sin personas ni combustible: " .  $moto->peso . "kg";
    echo "<br>";
    $moto->añadir_persona(2);
    $moto->poner_gasolina(2000);
    echo "El vehiculo pesa en total con 1 personas y 2000 combustible: " .  $moto->peso . "kg y es de color " . $moto->color;

?>
