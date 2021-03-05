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
    <style>

        @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);

        html,body
        {
            background-color: #c4c4c4;
            text-align: center;
            font-family: Raleway ,Helvetica , sans-serif;
            min-width: 400px;
        }

        /***** FORM 2 MODIFY *****/

        .container{
            text-align: center;
        }

        .labels2
        {
            display: inline-block;
            text-align: right;
            width: 40%;
            padding: 5px;
            margin-top: 10px;
        }

        #form2
        {
            background-image: url(moon.png);
            background-repeat: no-repeat;
            background-size: 25vw;
            background-color: rgb(255, 234, 210);
            margin:0 auto;
            border-radius: 6px;
            width: 75%;
            max-width: 910px;
            padding: 100px;
            padding-top: 70px;
        }

        .input-field2
        {
            height: 30px;
            width: 280px;
            padding: 5px;
            margin:10px;
            border: 1px solid #c0c0c0;
            border-radius: 12px;
        }

        .rightTab2
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
    <title>Modifier fiche patient</title>
</head>


<body>
    
    <div class="container">
        <div class="row">
            <div id="form2">

                <h1 style="color:rgb(250, 107, 107);" id="description">Modifier la fiche patient :</h1>

                    <form method="post" action="../process/update.php?id=<?=$userID?>">

                        <div class="rowTab2">
                            <div class="labels2">
                                <label>* Prénom :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="firstName" class="input-field" required placeholder="Jean">
                            </div>
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                               <label>* Nom :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="lastName" class="input-field" required placeholder="Nemare">
                            </div>        
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                                <label>* Date de naissance :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="date" name="birthDate" class="input-field" required placeholder="01/02/1994">
                            </div>     
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                                <label>Téléphone :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="phone" class="input-field" placeholder="0607080910">
                            </div>        
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                                <label>* Email :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="mail" class="input-field" required placeholder="JeanNemare@gmail.com">
                            </div>     
                        </div>
                        
                        <button class="action-button animate red">Modifier</button>
                    </form>
            </div>
        </div>
    </div>
    
</body>

</html>