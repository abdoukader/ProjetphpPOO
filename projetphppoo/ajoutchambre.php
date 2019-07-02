<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<br><br>
<form action="ajoutchambre.php" method="POST">
<input type="text"name="numchambre" placeholder="numchambre" >
    
        <label>batiments</label>
        <select class="batiment"name="id_batiment">
        <option value=""></option>
            <?php
                include "EtudiantSerice.php";
                $bati = new EtudiantSerice();
                foreach ($bati->findAlll('batiment') as $valeur) {
                    echo "<option value=$valeur->id_batiment> $valeur->id_batiment </option>";
                }
            ?>
        </select>

    <input type=submit value="ajouter" name="envoyer">
</form>
    <?php
include "EtudiantSerice.php";
include "chambres.php";

if (isset($_POST['envoyer'])) {
    $objet = new EtudiantSerice();
    $valeu = $_POST['numchambre'];
    $bat = $_POST['id_batiment'];

    $bout = new Chambres($valeu,$bat);
    $etut = new EtudiantSerice();
    $etut->ajouterchambre($bout);
}

?>
</body>
</html>