<?php 
    function sql() {
        $sql = new PDO("mysql:host=localhost;dbname=bandongho", "root", "");
        return $sql;
    }
?>