<?php

    class Connect
    {
        private $host="localhost";
        private $utilisateur='root';
        private $bdd = "universite";
        private $motpasse='Passer123';
        function connexion()
        {
            try {
                $connex=new PDO("mysql:host=".$this->host.";dbname=".$this->bdd,$this->utilisateur,$this->motpasse, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo "Vous etes bien connecté!";
            } catch (PDOExecption $e) {

            //die($e->getMessage());
                //echo "$e->getMessage()";
            }
            return $connex;
        }
    }
    $conn=new Connect;
    $conn-> connexion();
    