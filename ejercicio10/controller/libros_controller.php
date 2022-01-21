<?php
    function listar() {
        //Se incluye el modelo
        require 'models/libros_model.php';
        //En $libros tenemos un array conn todos los libro gracias al modelo 
        //La vista recibe un array para mostrarlo por pantalla
        $libros = getLibros();
        include 'views/libros_view.php';
    }
    
?>