<?php

require_once(__DIR__."/../PDO.php");


if (empty($_POST["idPatients"])) {
    die("Paramètres manquants");
}

$insertStatement = $pdo-> prepare("INSERT INTO appointments
(idPatients, dateHour)
VALUES
(?, ?);
");

$insertStatement -> execute ([
    $_POST["idPatients"],
    $_POST["jour"]." ".$_POST["heure"],
]);


header('Location: /Ecrire-donnees/Exercice-PDO-2/index.php?message=Votre rendez-vous a bien été crée pour le patient' .$_POST["idPatients"]);