<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patients et Rendez-vous</title>
</head>

<body>
    
<?php if (isset($_GET["message"])): ?>
    <div style="padding: 10px; width:25vw; background:orange; color:#fff;">
        <?=$_GET["message"]?>
    </div>
<?php endif; ?>



<div class="container link">
    <a href="./patients/ajout-patient.php">Créer un patient</a>
    <a href="./patients/liste-patients.php">Acceder à la liste des patients</a>
    <a href="./patients/ajout-rendezvous.php">Prendre un Rendez-Vous</a>
    <a href="./patients/liste-rdv.php">Acceder à la liste des rendez-vous</a>
</div>




</body>
</html>