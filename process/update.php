<?php


/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../PDO.php");


if (empty($_POST["nwfirstName"])) {
    die("Paramètres manquants");
}

/* Requête préparée pour la sécuruté */

/*

********* ANCIENNE REQUETE **********

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

******* NOUVELLE REQUETE 1 **********

$insertStatement = $pdo->prepare('UPDATE patients SET firstName = :nwfirstName, lastName = :nwlastName, birthDate = :nwbirthDate, phone = :nwphone, mail = :nwmail');

     
$insertStatement -> execute ([
        $_POST["nwfirstName"],
        $_POST["nwlastName"],
        $_POST["nwbirthDate"],
        $_POST["nwphone"],
        $_POST["nwmail"],
    ]);

*/

$insertStatement = $pdo->prepare('UPDATE patients
SET firstName = :nwfirstName,
lastName = :nwlastName,
birthDate = :nwbirthDate,
phone = :nwphone,
mail = :nwmail
WHERE id = nwid');

$req->execute(array(

       'firstName' => $nwfirstName,
       'lastName' => $nwlastName,
       'birthDate' => $nwbirthDate,
       'phone' => $nwphone,
       'mail' => $nwmail,
       'id' => $nwid

       ));

/* Chemin rediriger vers INDEX.PHP */

header('Location: /Ecrire-donnees/Exercice-PDO-2/index.php?message=Votre patient a bien été modifié');