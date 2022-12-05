<?php
require('config.php');

    $sql = "DELETE FROM utilisateurs WHERE id = 6;";
   
    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement supprimé avec succés";
      } else {
        echo "Erreur lors de la suppression : " . $conn->error;
      }
      
      $conn->close(); 
    
    header('Location: admincompte.php');
   
?>