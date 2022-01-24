<?php
    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return  new PDO('mysql:host=localhost;dbname=biblioteca', $user, $pwd);
    }
    
    function getPeriodicos() {
        $db = getConnection();
        $result =  $db->query('SELECT * FROM periodicos');
        $periodicos = array();
        while ($periodico = $result->fetch()) {
            $periodicos[] = $periodico;
        }
        return $periodicos;
    }

    function getPeriodico($id) {
        $db = getConnection();
        $result = $db->prepare('SELECT * FROM periodicos WHERE id = ?');
        $result->bindParam(1, $id);
        $result->execute();
        
        $periodico=$result->fetch();
    
        return $periodico;
    }
    
?>