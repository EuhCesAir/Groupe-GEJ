<?php
    include_once "../config.php";

    /* accès au model */

    $bdd = new PDO("mysql:host=localhost;dbname=series_tv;charset=utf8", "btssio", "btssio");

    $query = 'SELECT nom_serie, image_serie FROM Series;';
    $req = $bdd->prepare($query);
    $req->execute();

    
?>