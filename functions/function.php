<?php
    include "bdd.php";
    $bdd = connexion_bdd();

    function recuperation(){
        global $bdd;
        $article = $bdd->query("SELECT * FROM students");
        $resultat = $article->fetchAll();
        return $resultat;
    }
?>