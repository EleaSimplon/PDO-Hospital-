<?php

/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");


$sql1 = 'SELECT * FROM patients';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste Patients</title>
</head>

<body>
    <h1> Base de données Patients </h1>
    <table class="table" border="2">
        <thead>
            <tr>
                <th style="background-color: rgb(255, 205, 205)">Prénom</th>
                <th style="background-color: rgb(209, 255, 245)">Nom</th>
                <th style="background-color: rgb(255, 244, 209)">Infos</th>
                <th style="background-color: rgb(255, 244, 209)">Modifier</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($pdo->query($sql1) as $patient)
             { 
                echo '<tr>';
                echo '<td>' .$patient['lastname']. '</td>';
                echo '<td> '.$patient['firstname']. '</td>';
                echo '<td> <a href="profil-patient.php?id='.$patient['id'].' ">👁‍🗨</a></td>';
                echo '<td> <a href="modifier-patient.php?id='.$patient['id'].' ">🖋</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <a href='/Ecrire-donnees/Exercice-PDO-2/patients/ajout-patient.php'>Créer un patient</a>
</body>
</html>
