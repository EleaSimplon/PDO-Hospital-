<?php

/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");

$userID = $_GET['id'];


$sql1 = 'SELECT * FROM patients WHERE id='.$userID.'';

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
                <th style="background-color: rgb(255, 205, 205)">First name</th>
                <th style="background-color: rgb(209, 255, 245)">Last name</th>
                <th style="background-color: rgb(255, 244, 209)">Date of birth</th>
                <th style="background-color: rgb(255, 244, 209)">Phone</th>
                <th style="background-color: rgb(255, 244, 209)">Mail</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($pdo->query($sql1) as $patient)
             { 
                echo '<tr>';
                echo '<td>' .$patient['firstname']. '</td>';
                echo '<td> '.$patient['lastname']. '</td>';
                echo '<td> '.$patient['birthdate']. '</td>';
                echo '<td> '.$patient['phone']. '</td>';
                echo '<td> '.$patient['mail']. '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <a href="./liste-patients.php">Return to patients list</a>
</body>
</html>
</html>

