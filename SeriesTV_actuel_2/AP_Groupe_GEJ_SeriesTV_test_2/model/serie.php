<?php
    /* Accès à la table client de la base de données *************************/
    class Serie {

        // Connection
        private $cnx;

        // Colonne
        public $id;
        public $nom;
        public $description;
        public $image;

        // Connexion à la base de données
        public function __construct(array $donnees){
            $this->hydrater($donnees);
        }

        public function hydrater(array $donnees){
            foreach ($donnees as $key => $value){
                // On récupère le nom du setter correspondant à l'attribut.
                $method = 'set'.ucfirst($key);
    
                // Si le setter correspondant existe.
                if (method_exists($this, $method)){
                    // On appelle le setter.
                    $this->$method($value);
                }
            }
        }
    
        // Getters
        public function getId()                 {return $this->id;}
        public function getNomSerie()           {return $this->nom;}
        public function getdescriptionSerie()   {return $this->description;}
        public function getImageSerie()         {return $this->image;} 

        // Setters
        public function setId($id)                          {$this->id          = $id;}
        public function setNomSerie($nom)                   {$this->nom         = $nom;}
        public function setdescriptionSerie($description)   {$this->description = $description;}
        public function setImageSerie($image)               {$this->image       = $image;}

    }
?>