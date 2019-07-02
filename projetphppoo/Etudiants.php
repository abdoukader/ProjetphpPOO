<?php
abstract class Etudiants
{
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $datenaiss;

    public function __construct($matricule, $nom, $prenom, $email, $tel, $datenaiss)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->datenaiss = $datenaiss;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }
    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

}
