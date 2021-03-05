<?php

/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");

$selectStatement = $pdo->prepare(
    "SELECT appointments.*,
            patients.firstname,
            patients.lastname
    FROM appointments
    JOIN patients
        ON patients.id = appointments.idPatients 
    WHERE appointments.id=?"
);

$selectStatement->execute([
    $_GET['id']
]);

$appointment = $selectStatement->fetch();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Voir un RDV</title>
</head>

<body>
    <h1> Voir les rendez-vous</h1>
    <table class="table" border="2">
        <thead>
            <tr>
                <th style="background-color: rgb(255, 205, 205)">ID</th>
                <th style="background-color: rgb(255, 205, 205)">ID patient</th>
                <th style="background-color: rgb(255, 205, 205)">Prénom</th>
                <th style="background-color: rgb(209, 255, 245)">Nom</th>
                <th style="background-color: rgb(255, 244, 209)">Rendez-vous</th>
                <th style="background-color: rgb(255, 244, 209)">Modifier</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                echo '<tr>';
                echo '<td>' .$appointment['id']. '</td>';
                echo '<td>' .$appointment['idPatients']. '</td>';
                echo '<td> '.$appointment['firstname']. '</td>';
                echo '<td> '.$appointment['lastname']. '</td>';
                echo '<td> '.$appointment['dateHour']. '</td>';
                echo '<td> <a href="modifier-rdv.php?id='.$appointment['id'].' ">🖋</a></td>';
                echo '</tr>';
            ?>
        </tbody>
    </table>

    <a href="./liste-rdv.php">Retour</a>
</body>
</html>
</html>

