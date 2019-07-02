
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href="nforme.css">
    <link rel="stylesheet" href="style.css">
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
<body id="bour">
<br>
<h3 align=center>liste de tous les etudiants boursier</h3>
<table id="mydatatable" class="table table-striped table-bordered" style="width:100%">

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
         </tr>
     </thead>';
     <tbody>
<?php
include "Etudiants.php";
include "EtudiantSerice.php";

$objet1 = new EtudiantSerice();

foreach ($objet1->listerboursier() as $val) {
    echo '<tr>';
    echo '<td>' . $val['matricule'] . '</td>';
    echo '<td>' . $val['nom'] . '</td>';
    echo '<td>' . $val['prenom'] . '</td>';
    echo '<td>' . $val['mail'] . '</td>';
    echo '<td>' . $val['tel'] . '</td>';
    echo '<td>' . $val['datenaiss'] . '</td>';
    echo '<td>' . $val['libelle'] . '</td>';
    echo '<td>' . $val['montant'] . '</td>';
    echo '</tr>';
}

?>
</tbody>
</table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mydatatable').DataTable({
            dom: "<'row'<'col-sm-4'f><'col-sm-offset-2 col-sm-6'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-xs-12 col-sm-7 col-sm-offset-5 text-right'p>>",
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sFirst": "Premier",
                    "sLast": "Dérnier",
                    "sNext": "Suivant",
                    "sPrevious": "Précedent",
                },
                "sSearch": "Recherche:",
                "sEmptyTable": "Aucune donnée disponible",
                "sInfo": "affichage de _START_ à _END_ sur _TOTAL_ éléments",
                "sInfoEmpty": "Aucune donnée disponible",
                "sInfoFiltered": "(Recherché sur _MAX_ éléments au total)",
                "infoPostFix": "",
                "thousands": ",",
                "sLengthMenu": "Afficher par _MENU_ éléments",
                "loadingRecords": "Chargement...",
                "processing": "procéssus...",
                "sZeroRecords": "Aucun résultat trouvé",
            },
            "iDisplayLength": 10,
            "lengthChange": false,
            "info": false,
            responsive: false
        });
    });
</script>

</body>
</html>