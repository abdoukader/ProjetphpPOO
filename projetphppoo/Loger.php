<?php

    class Loger extends boursiers{

        private $chambre;

        public function __construct($matricule="",$nom="",$prenom="",$email="",$tel="",$datenaiss="",$libelle="",$montant="",$chambre="")
        {
            parent:: __construct($matricule,$nom,$prenom,$email,$tel,$datenaiss,$libelle,$montant);

            $this->chambre=$chambre;
        } 

        public function getChambre()
        {
            return $this->chambre;
        } 
        public function setChambre($chambre)
        {
                $this->chambre = $chambre;

            return $this;
        }
    }


?>