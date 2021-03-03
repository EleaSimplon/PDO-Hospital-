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
    <link rel="stylesheet" href="style.css">
    <title>Modify profile</title>
</head>


<body>
    
    <div class="container">
        <div class="row">
            <div id="form2">

                <h1 style="color:rgb(250, 107, 107);" id="description">Complete to modify your infos...</h1>

                    <form method="post" action="../process/update.php">

                        <div class="rowTab2">
                            <div class="labels2">
                                <label>* First Name :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="firstName" class="input-field" required placeholder="Jean">
                            </div>
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                               <label>* Last Name :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="text" name="lastName" class="input-field" required placeholder="Nemare">
                            </div>        
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                                <label>* Birth Date :</label>
                            </div>
                            <div class="rightTab2">
                                <input type="date" name="birthDate" class="input-field" required placeholder="01/02/1994">
                            </div>     
                        </div>

                        <div class="rowTab2"> 
                            <div class="labels2">
                                <label>Phone Number :</label>
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
                        
                        <button class="action-button animate red">Modify</button>
                    </form>
            </div>
        </div>
    </div>
    
</body>

</html>