<?php
    
    function formularioLogin() {
        require 'models/usuarios_model.php';
        $error = "";
        include 'views/usuarios_login_view.php';
    }

    function loginUser() {
        require 'models/usuarios_model.php';
        
        $nombre = "";
        $pass = "";
        $error = "";
        // Comprobamos si ya hay una sesion activa y redireccionamos en caso afirmativo.
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nombre = $_POST['username'];
            $pass = $_POST['password'];
            $passCode = password_hash($pass,PASSWORD_DEFAULT);
            
            insertarContraseña($nombre, $passCode);

            if (login($nombre, $pass)) {
                session_start();
    
                $_SESSION['nombre'] = getUser($nombre)['nombre'];
               
               header("Location: index.php?controller=componentes&action=listar");
                
            } else {
                $error = "<p style='color:red'>Contraseña o nombre incorrecto.</p>";
                
                
            }
        
        }
        include 'views/usuarios_login_view.php';
        
    }
        
    function cerrarSesion() {
        require 'models/usuarios_model.php';
        session_start();
        session_destroy();
        $error = "";
        include 'views/usuarios_login_view.php';
    }
?>