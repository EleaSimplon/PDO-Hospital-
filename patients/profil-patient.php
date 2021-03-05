<?php

require_once(__DIR__."/../PDO.php");

$selectStatement =$pdo->prepare("SELECT * FROM patients WHERE id=?");
$selectStatement-> execute([
    $_GET["id"]
]);

$patient = $selectStatement->fetch();

$selectRdvStatement = $pdo->prepare(
    "SELECT appointments.*, patients.firstname, patients.lastname 
     FROM appointments 
     JOIN patients 
     ON patients.id = appointments.idPatients 
     WHERE patients.id=?");
     $selectRdvStatement-> execute([
        $_GET["id"]
    ]);


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Patients</title>
</head>

<body>
    <h1> Base de données Patients </h1>
    <table class="table" border="2">
        <thead>
            <tr>
                <th style="background-color: rgb(255, 205, 205)">Prénom</th>
                <th style="background-color: rgb(209, 255, 245)">Nom</th>
                <th style="background-color: rgb(255, 244, 209)">Date de naissance</th>
                <th style="background-color: rgb(255, 244, 209)">Téléphone</th>
                <th style="background-color: rgb(255, 244, 209)">Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
                echo '<tr>';
                echo '<td>' .$patient['firstname']. '</td>';
                echo '<td> '.$patient['lastname']. '</td>';
                echo '<td> '.$patient['birthdate']. '</td>';
                echo '<td> '.$patient['phone']. '</td>';
                echo '<td> '.$patient['mail']. '</td>';
                echo '</tr>';
            ?>
        </tbody>
    </table>

    <h1> Voir les rendez-vous</h1>
    <table class="table" border="2">
        <thead>
            <tr>
                <th style="background-color: rgb(255, 244, 209)">Rendez-vous</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($selectRdvStatement->fetchAll() as $appointment){
                     echo '<tr>';
                echo '<td> '.$appointment['dateHour']. '</td>';
                echo '</tr>';
                }
               
            ?>
        </tbody>
    </table>

    <a href="./liste-patients.php">Return to patients list</a>
</body>
</html>
</html>

