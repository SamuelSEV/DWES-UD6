<?php
    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return  new PDO('mysql:host=localhost;dbname=biblioteca', $user, $pwd);
    }
    
    function getLibros() {
        $db = getConnection();
        $result =  $db->query('SELECT titulo, precio FROM libros');
        $libros = array();
        while ($libro = $result->fetch()) {
            $libros[] = $libro;
        }
        return $libros;
    }

    function getLibro($id) {
        $db = getConnection();
        $result =  $db->query('SELECT titulo, precio FROM libros WHERE id = ?');
        $result = $db->prepare($result);
        $result->bindParam(1, $id);
        $result->execute();
        $libro=$result->fetchAll();
        
        return $libro;
    }
    
?>