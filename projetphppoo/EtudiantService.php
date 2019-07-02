<?php 
include "Connect.php";
class EtudiantSerice
{
    public function addEtudiant(Etudiants $etudiant){
        $con = new Connect;
        $bdd = $con->connexion();

        $req = $bdd->prepare("INSERT INTO etudiants (matricule,nom,prenom,mail,tel,datenaiss) VALUES (:matricule,:nom,:prenom,:mail,:tel,:datenaiss)");
        $req->bindValue(':matricule', $etudiant->getMatricule(), PDO::PARAM_STR);
        $req->bindValue(':nom', $etudiant->getNom(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $etudiant->getPrenom(), PDO::PARAM_STR);
        $req->bindValue(':mail', $etudiant->getEmail(), PDO::PARAM_STR);
        $req->bindValue(':tel', $etudiant->getTel(), PDO::PARAM_STR);
        $req->bindValue(':datenaiss', $etudiant->getDatenaiss(), PDO::PARAM_STR);
        $req->execute();

        if (get_class($etudiant) == "Nonboursier") {
            $reqt = $bdd->query("SELECT MAX(id_etudiant) as id FROM etudiants");
            while (($tab = $reqt->fetch())) {
                $id1 = $tab["id"];
            }
            $reqt = $bdd->prepare("INSERT INTO `nonboursier`(`id_etudiant`, `adresse`) VALUES (:id_etudiant,:adresse)");
            $reqt->bindValue(':id_etudiant', $id1);
            $reqt->bindValue(':adresse', $etudiant->getAdresse());
            $reqt->execute();
            if ($reqt) {
                echo "l'etudiant nonboursier a ete bien inscrit dans non boursier";
            }
        }
    }
}



?>