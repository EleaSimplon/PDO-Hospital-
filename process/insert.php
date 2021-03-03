<?php


/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");


if (empty($_POST["firstName"])) {
    die("Paramètres manquants");
}

/* Requête préparée pour la sécuruté */

$insertStatement = $pdo-> prepare("INSERT INTO patients
(firstName, lastName, birthDate, phone, mail)
VALUES
(?, ?, ? , ?, ?);
");

$insertStatement -> execute ([
    $_POST["firstName"],
    $_POST["lastName"],
    $_POST["birthDate"],
    $_POST["phone"],
    $_POST["mail"],
]);

/* Chemin rediriger vers INDEX.PHP */

header('Location: /Ecrire-donnees/Exercice-PDO-2/index.php?message=Votre patient a bien été crée');