<?php
    function listar() {
       
        require 'models/componentes_model.php';
       
        $componentes = obtenerTodos();
        include 'views/componentes_view.php';
    }

    function mostrarComponente() {
        require 'models/componentes_model.php';        
        $componente = obtenerElemento($_GET['id']);
        include 'views/componente_view.php';
    }

    function editarComponente() {
        require 'models/componentes_model.php';   
        include 'views/edit.php'; 
    }
    
?>