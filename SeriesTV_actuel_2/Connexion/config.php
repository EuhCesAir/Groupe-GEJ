<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'btssio');
define('DB_PASSWORD', 'btssio');
define('DB_NAME', 'series_tv');
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
