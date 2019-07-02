

   



<?php
    include "Etudiants.php";
    include "EtudiantSerice.php";


   /* if (isset($_POST['envoyer'])) {
        $valeur = $_POST['valeur'];
    }*/
    $objet1=new EtudiantSerice();
    foreach ($objet1->findnonboursier() as $val) {
        echo '<table class="table">';
        echo '<tr>';
        //echo '<td>'.$val['id_etudiant'].'</td>';
        echo '<td>'.$val['matricule'].'</td>';
        echo '<td>'.$val['nom'].'</td>';
        echo '<td>'.$val['prenom'].'</td>';
        echo '<td>'.$val['mail'].'</td>';
        echo '<td>'.$val['tel'].'</td>';
        echo '<td>'.$val['datenaiss'].'</td>';
        echo '<td>'.$val['adresse'].'</td>';
        echo '</tr>';
        echo '<table>';
    }



    
?>