<?php


/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");


if (empty($_POST["firstName"])) {
    die("Paramètres manquants");
}

/* Requête préparée pour la sécuruté */


$sql = 'UPDATE patients SET lastname = ?, firstname = ?, birthdate = ?, phone = ?, mail = ? WHERE id = ?';

$result = $pdo->prepare($sql);

$result->execute(array($_POST["firstName"],
       $_POST["lastName"],
       $_POST["birthDate"],
       $_POST["phone"],
       $_POST["mail"],
       $_GET['id']));

/* Chemin rediriger vers INDEX.PHP */

header('Location: /Ecrire-donnees/Exercice-PDO-2/index.php?message=Votre patient a bien été modifié');