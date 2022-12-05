<?php

     class Controller
     {
          public $manageSerie;

          public function __construct()
          {
               require_once("model/modelSerie.php");
               $this->modelSerie = new modelSerie();
               $this->modelSerie->getConnection();
          }

          public function Dispatcher($action, $id = null)
          {
               switch ($action) 
               {
                    case 'latest' :
                         // Afficher la page Nouveautés
                         include_once 'view/latest.php';
                         break;

                    case 'discover' :
                         // Afficher la page Découvrir
                         include_once 'view/discover.php';
                         break;

                    case 'popular' :
                         // Afficher la page Populaires
                         include_once 'view/popular.php';
                         break;

                    case 'serie' :
                         // Afficher la page d'une série en fonction de son id
                         include_once 'view/viewSerie.php';
                         break;
                    
                    case 'home' :
                         // Afficher la page d'accueil
                         include_once 'view/home.php';
                         break;
                         
                    default:
                         // On appel la liste de tous les clients
                         include 'view/home.php';
                    break;
               }
          }
     }

?>