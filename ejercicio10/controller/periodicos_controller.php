<?php
    function listar() {
        //Se incluye el modelo
        require 'models/periodicos_model.php';
        //En $libros tenemos un array conn todos los libro gracias al modelo 
        //La vista recibe un array para mostrarlo por pantalla
        $periodicos = getPeriodicos();
        include 'views/periodicos_view.php';
    }

    function mostrarPeriodico() {
        require 'models/periodicos_model.php';        
        $periodico = getPeriodico($_GET['id']);
        include 'views/periodico_view.php';
    }
    
?>