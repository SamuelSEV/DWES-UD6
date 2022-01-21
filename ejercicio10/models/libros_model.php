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
    
?>