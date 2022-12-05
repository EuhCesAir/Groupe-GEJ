<?php
    require_once("model/model.php");
    /* Accès à la table client de la base de données *************************/
    class modelSerie extends Database {

        // Colonne
        public $id;
        public $nom;
        public $description;
        public $image;

        // Connexion à la base de données
        public function __construct()
        {
            parent::__construct();
        }

        // Extraction des données des clients depuis la base de données.
        public function getSeries()
        {
            $sql = "SELECT nom_serie, description_serie, image_serie FROM Series;";
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute();
            $clients = $rqt->fetchAll(PDO::FETCH_ASSOC);
            $rqt->closeCursor(); // Achève le traitement de la requête
            return $clients;
        }

        // Récupère les données d'un client déterminé par son id
        public function getSerie($id)
        {
            $sql = "SELECT id, nom_serie, description_serie, image_serie FROM Series WHERE id = ?;";
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute(array($id));
            $client = $rqt->fetch();
            $rqt->closeCursor();    // Ferme le curseur, permettant à la requête d'être de nouveau exécutée 
            return $client;
        }

        /* public function deleteClient($id)
        {
            // Supprime les données d'un client déterminé par son id
            $sql = "DELETE FROM client WHERE id = ?;";
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute(array($id));
            $rqt->closeCursor();    // Ferme le curseur, permettant à la requête d'être de nouveau exécutée 
            header('Location:/Etienne Riviere/PHP_TP6_MVC_POO/');
            exit();
        }

        public function addClient(array $client)
        {
            // Ajoute un client
            $sql = "INSERT INTO client (nom, telephone, email, adresse)
            VALUES (?, ?, ?, ?);";
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute(array($client['nom'], $client['telephone'], $client['email'], $client['adresse']));
            $rqt->closeCursor();    // Ferme le curseur, permettant à la requête d'être de nouveau exécutée 
            header('Location:/Etienne Riviere/PHP_TP6_MVC_POO/');
            exit();
        }

        public function updateClient($client)
        {
            // Modifie un client
            $sql = "UPDATE client 
                    SET nom = ?, telephone = ?, email = ?, adresse = ?, id = ?
                    WHERE id = ?;";
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute(array($client['nom'], $client['telephone'], $client['email'], $client['adresse'], (int) $client['id'], (int) $client['id']));
            $rqt->closeCursor();    // Ferme le curseur, permettant à la requête d'être de nouveau exécutée 
            header('Location:/Etienne Riviere/PHP_TP6_MVC_POO/');
            exit();
        } */
    }
?>
