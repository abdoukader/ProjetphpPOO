<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/home/thiam/Musique/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nforme.css">
    <title>Document</title>
</head>
<nav>
    <ul>
        <li><a href=trouver.php> CHERCHER</a></li>
        <li><a href=nforme.php> AJOUTER</a></li>
        <li><a href=listeboursiers.php>BOURSIER</a></li>
        <li><a href=findnonboursier.php>NON BOURSIER</a></li>
        <li><a href=listerloger.php>LOGER</a></li>
        <li><a href=findAll.php>LISTER</a></li>
    </ul>
</nav>
<body>

<?php
      include "Etudiants.php";
      include "EtudiantSerice.php";
 
 
     $objet2=new EtudiantSerice();
     echo '<br>';
     echo '<h3 align=center>liste des etudiants boursier ett loger </h3>';
     echo '<table id="datatable" class="table table-striped table-bordered" style="width:100%">
     <thead>
         <tr>
             <th>Matricule</th>
             <th>NOM</th>
             <th>PRENOM</th>
             <th>MAIL</th>
             <th>TELEPHONE</th>
             <th>DATENAISS</th>
             <th>LIBELLE</th>
             <th>MONTANT</th>
             <th>NUMCHAMBRE</th>
             <th>NOMBATIMENT</th>
         </tr>
     <thead>';
     foreach ($objet2->listerloger()as $val) {
        echo '<tbody>
        <tr>';
        echo '<td>'.$val['matricule'].'</td>';
        echo '<td>'.$val['nom'].'</td>';
        echo '<td>'.$val['prenom'].'</td>';
        echo '<td>'.$val['mail'].'</td>';
        echo '<td>'.$val['tel'].'</td>';
        echo '<td>'.$val['datenaiss'].'</td>';
        echo '<td>'.$val['libelle'].'</td>';
        echo '<td>'.$val['montant'].'</td>';
        echo '<td>'.$val1['numchambre'].'</td>';
        echo '<td>'.$val1['nom_batiment'].'</td>';
        echo '</tr>';
        //echo </tbody>';
    }
    echo '</table>';
    
?>
    
</body>
</html>