<?php
    require "config/server.php";    
    function connexion_bdd(){
        $name_name = DB_NAME;
        $name_host = DB_HOST;
        $name_username = DB_USERNAME;
        $name_password = DB_PASSWORD;
        try {
            $bdd = new PDO("mysql:dbname=$name_name;dbhost=$name_host","$name_username","$name_password");
            $bdd->exec("SET NAMES utf8mb4");

        } catch (PDOException $erreur) {
           die("connexion failed : ".$erreur->getMessage());
        }
        return $bdd;
     }
    
?>