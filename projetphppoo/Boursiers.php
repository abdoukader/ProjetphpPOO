<?php
//require "Etudiants.php";
//include "forme.php";
//include "EtudiantService.php";
//require "Connexion.php";

class Boursiers extends Etudiants
{
    private $libelle;
    //private $montant;
    public function __construct($matricule, $nom, $prenom, $email, $tel, $datenaiss, $libelle)
    {
        parent::__construct($matricule, $nom, $prenom, $email, $tel, $datenaiss);

        $this->$libelle = $libelle;
        //$this->$libelle = $montant;

    }
    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

   /* public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }*/
} //
