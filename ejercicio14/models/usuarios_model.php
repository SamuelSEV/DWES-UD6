<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return  new PDO('mysql:host=localhost;dbname=componentes', $user, $pwd);
    }

    function insertarContraseña($nombre,$pass) {
        try {
            $conn = getConnection();
            $insert=$conn->prepare("UPDATE usuarios SET password=? WHERE password='' AND nombre=?");
            $insert->bindParam(1, $pass);
            $insert->bindParam(2, $nombre);
            $insert->execute();
            $conn = null;
            return true;
        } catch (PDOException $e) {
            echo  $e;
        }
    } 

    /*
    * Obtenemos todos los datos del usuario solicitado.
    */
    function getUser($nombre) {
        try {
            $conn = getConnection();
            $consulta=$conn->prepare("SELECT * FROM usuarios WHERE nombre = ?");
            $consulta->bindParam(1, $nombre);

            $consulta->execute();

            $user = $consulta->fetch();
            $conn = null;

            return $user;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    /*
    * Comprobacion de usuario existente.
    */
    function login($nombre, $pass) {
     
        $user = getUser($nombre);
        $result = false;
       
  
        if ($user) {
            $result = password_verify($pass, $user['password']);
        }

        return $result;
    }
?>