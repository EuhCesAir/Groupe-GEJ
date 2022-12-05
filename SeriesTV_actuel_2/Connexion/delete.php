<?php
require('config.php');

    $sql = "DELETE FROM item_rating WHERE id = 35;";
   
    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement supprimé avec succés";
      } else {
        echo "Erreur lors de la suppression : " . $conn->error;
      }
      
      $conn->close(); 
    
    header('Location: admin.php');
   
?>