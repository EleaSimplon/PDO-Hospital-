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
            background-color: #FFC1B4;
            text-align: center;
            font-family: Raleway ,Helvetica , sans-serif;
            min-width: 400px;
        }

        /***** FORM SIGN UP *****/

        .container{
            text-align: center;
        }

        .labels
        {
            display: inline-block;
            text-align: right;
            width: 40%;
            padding: 5px;
            margin-top: 10px;
        }

        #form1
        {
            background-image: url(pluto.png);
            background-repeat: no-repeat;
            background-size: 25vw;
            background-color: rgb(255, 234, 210);
            margin:0 auto;
            border-radius: 6px;
            width: 75%;
            max-width: 910px;
            padding: 80px;
            padding-top: 70px;
        }

        .input-field
        {
            height: 30px;
            width: 280px;
            padding: 5px;
            margin:10px;
            border: 1px solid #c0c0c0;
            border-radius: 12px;
        }

        .rightTab
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

    <title>Créer un patient</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <div id="form1">
                <h1 style="color:rgb(250, 107, 107);" id="description">Créer un patient :</h1>
                    <form method="post" action="../process/insert-p-rdv.php">

                        <div class="rowTab">
                            <div class="labels">
                                <label>* Prénom :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="firstName" class="input-field" required placeholder="Jean">
                            </div>
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                               <label>* Nom :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="lastName" class="input-field" required placeholder="Nemare">
                            </div>        
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                                <label>* Date de naissance :</label>
                            </div>
                            <div class="rightTab">
                                <input type="date" name="birthDate" class="input-field" required placeholder="01/02/1994">
                            </div>     
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                                <label>Téléphone :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="phone" class="input-field" placeholder="0607080910">
                            </div>        
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                                <label>* Email :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="mail" class="input-field" required placeholder="JeanNemare@gmail.com">
                            </div>     
                        </div>

                        <h1 style="color:rgb(250, 107, 107);">Ajouter un Rendez vous :</h1>
                        <div class="rowTab"> 
                                <div class="labels">
                                    <label>* Choisir une date et une heure :</label>
                                </div>
                                <div class="rightTab">
                                    <input type="date" name="jour" class="input-field" required>
                                    <input type="time" name="heure" min="09:00" max="18:00" required>
                                </div>     
                            </div>

                            <button class="action-button animate red">Soumettre</button>
                    </form>

            </div>
        </div>
    </div>

    <a href="/Ecrire-donnees/Exercice-PDO-2/index.php">Accueil</a></br>

</body>

</html>