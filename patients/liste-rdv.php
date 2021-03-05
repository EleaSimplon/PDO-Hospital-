<?php

/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");

$selectStatement = $pdo->prepare(
    "SELECT appointments.*, `patients`.lastname, `patients`.firstname
    FROM `patients`, `appointments`
    WHERE `appointments`.idPatients = `patients`.id;"
);

$selectStatement->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste RDV</title>

</head>

<body>
    <h1> Liste des Rendez-vous</h1>
    <table class="table" border="2">
        <thead>
            <tr>
                <th style="background-color: rgb(255, 244, 209)">Id</th>
                <th style="background-color: rgb(255, 205, 205)">Nom</th>
                <th style="background-color: rgb(209, 255, 245)">Prénom</th>
                <th style="background-color: rgb(255, 244, 209)">Voir RDV</th>
                <th style="background-color: rgb(255, 244, 209)">Modifier</th>
                <th style="background-color: rgb(255, 244, 209)">Supp RDV</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($selectStatement->fetchAll() as $appointment)
             { 
                echo '<tr>';
                echo '<td>' .$appointment['id']. '</td>';
                echo '<td>' .$appointment['lastname']. '</td>';
                echo '<td> '.$appointment['firstname']. '</td>';
                echo '<td> <a href="voir-rdv.php?id='.$appointment['id'].' ">👁‍🗨</a></td>';
                echo '<td> <a href="modifier-rdv.php?id='.$appointment['id'].' ">🖋</a></td>';
                echo '<td> <a href="delete-rdv.php?id='.$appointment['id'].' ">❌</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <a href="/Ecrire-donnees/Exercice-PDO-2/index.php">Accueil</a></br>

</body>
</html>