<?php

    declare(strict_types=1);
    // Toute interaction passe par l'index et est transmise
    // directement au contrôleur responsable du traitement

    require_once("controller/controller.php");
    
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
    $val    = isset($_REQUEST['val']) ? $_REQUEST['val'] : NULL;

    $controller = new Controller();
    $controller->dispatcher($action, $val);

?>