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

    <style>

        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);

        html,body
        {
            background-color: #f7eaa4;
            text-align: center;
            font-family: Raleway ,Helvetica , sans-serif;
        }
        .container{
            text-align: center;
        }

        .labels3
        {
            display: inline-block;
            text-align: right;
            width: 40%;
            padding: 5px;
            margin-top: 10px;
        }

        #form3
        {
            background-image: url(planet.png);
            background-repeat: no-repeat;
            background-size: 25vw;
            background-color: rgb(255, 234, 210);
            margin:0 auto;
            border-radius: 6px;
            width: 75%;
            max-width: 300vw;
            padding: 8vw;
            padding-top: 5vw;
        }

        .input-field3
        {
            height: 30px;
            width: 280px;
            padding: 5px;
            margin:10px;
            border: 1px solid #c0c0c0;
            border-radius: 12px;
        }

        .rightTab3
        {
            display: inline-block;
            text-align: left;
            width: 48%;
            vertical-align: middle;
        }
         /*** BUTTON ***/

         .animate
        {
            transition: all 0.1s;
            -webkit-transition: all 0.1s;
        }

        .action-button
        {
            position: relative;
            padding: 10px 40px;
            border-radius: 8px;
            font-family: 'Pacifico', cursive;
            font-size: 20px;
            color: #FFF;
            text-decoration: none;
        }

        .red
        {
            background-color: #db5534;
            border-bottom: 5px solid #b93f29;
            text-shadow: 0px -2px #b96f29;
        }

        .action-button:active
        {
            transform: translate(0px,5px);
        -webkit-transform: translate(0px,5px);
            border-bottom: 1px solid;
        }
    </style>

    <title>Rendez vous</title>
</head>
<body>

    <div class="container">
            <div class="row">
                <div id="form3">

                    <h1 style="color:rgb(250, 107, 107);">Ajouter un Rendez vous !</h1>
                        <form method="post" action="../process/insertRDV.php">

                            <div class="rowTab3"> 
                                <div class="labels3">
                                    <label>* ID patient:</label>
                                    <select class="select" name="idPatients">
                                        <option></option>
                                        <?php foreach($pdo->query($sql1) as $patient) { ?>
                                            <option value="<?=$patient["id"]?>"><?=$patient["firstname"]?> <?=$patient["lastname"]?> </option>
                                        <?php } ?>
                                    </select>
                                </div>     
                            </div>

                            <div class="rowTab3"> 
                                <div class="labels3">
                                    <label>* Choisir une date et une heure :</label>
                                </div>
                                <div class="rightTab3">
                                    <input type="date" name="jour" class="input-field" required>
                                    <input type="time" name="heure" min="09:00" max="18:00" required>
                                </div>     
                            </div>

                            <button class="action-button animate red">Soumettre</button>
                        </form>
                </div>
            </div>
        </div>
        
    <div class="link">
        <a href="/Ecrire-donnees/Exercice-PDO-2/index.php">Accueil</a></br>
    </div>
        
</body>
</html>