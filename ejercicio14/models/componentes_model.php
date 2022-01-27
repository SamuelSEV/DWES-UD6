<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return  new PDO('mysql:host=localhost;dbname=componentes', $user, $pwd);
    }

    function obtenerTodos(){
        try {
            $conn = getConnection();
            $consulta=$conn->query("SELECT *  FROM componentes");
            $elementos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $conn = null;
            return $elementos;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function obtenerElemento($id){
        try {
            $conn = getConnection();
            $consulta = "SELECT * FROM componentes WHERE id = ?";
            $consulta = $conn->prepare($consulta);
            $consulta->bindParam(1, $id);
            $consulta->execute();
            $elemento=$consulta->fetch(PDO::FETCH_ASSOC);
            $conn = null;
            return $elemento;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function insertarElemento($marca, $modelo, $descripcion, $precio, $cantidad, $fecha, $imagen) {
        try {
            $conn = getConnection();
            $insert=$conn->prepare("INSERT INTO componentes (marca, modelo, descripcion, precio, cantidad, fechalanzamiento, imagen) VALUES (?,?,?,?,?,?,?)");
            $insert->bindParam(1, $marca);
            $insert->bindParam(2, $modelo);
            $insert->bindParam(3, $descripcion);
            $insert->bindParam(4, $precio);
            $insert->bindParam(5, $cantidad);
            $insert->bindParam(6, $fecha);
            $insert->bindParam(7, $imagen);
            $insert->execute();
            $last_id = $conn->lastInsertId();
            $conn = null;
            return $last_id;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    } 

    function editarElemento($id, $marca, $modelo, $descripcion, $precio, $cantidad, $fecha, $imagen){
        try {
            $conn = getConnection();
            $actualizar=$conn->prepare("UPDATE componentes SET marca=?,modelo=?,descripcion=?,precio=?,cantidad=?,fechalanzamiento=?,imagen=? WHERE id=?");
            $actualizar->bindParam(1, $marca);
            $actualizar->bindParam(2, $modelo);
            $actualizar->bindParam(3, $descripcion);
            $actualizar->bindParam(4, $precio);
            $actualizar->bindParam(5, $cantidad);
            $actualizar->bindParam(6, $fecha);
            $actualizar->bindParam(7, $imagen);
            $actualizar->bindParam(8, $id);
            $actualizar->execute();
            $retorno = $actualizar->execute();
            $conn = null;
            return $retorno;
        } catch (PDOException $e) {
            return false;
        }
    }

    function eliminarElemento($id){
        try {
            $conn = getConnection();
            $eliminar = $conn->prepare("DELETE FROM componentes WHERE id=?");
            $eliminar->bindParam(1, $id);
            $eliminar->execute();
            $retorno = $eliminar->execute();
            $conn = null;
            return $retorno;
        } catch (PDOException $e) {
            return false;
        }

    }

    function getUser($username) {
        try {
            $conn = getConnection();
            $usuario = $conn->prepare("SELECT * FROM usuarios WHERE nombre = ?");
            $usuario->bindParam(1, $username);

            $usuario->execute();

            $user = $usuario->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $user;
    }

    /*
    * Comprobacion de usuario existente.
    */
    function login($usuario, $password) {

        // Obtenemos el usuario solicitado.
        $user = getUser($usuario);
        $result = false;

        // Comprobamos si hemos conseguido obtener un usuario con los datos dados.
        if ($user) {
            // Y realizamos la verificacion de la contraseña.
            $result = password_verify($password, $user['password']);
        }

        return $result;
    }
?>