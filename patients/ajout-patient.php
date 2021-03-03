<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Créer un patient</title>
</head>


<body>
    <div class="container">
        <div class="row">
            <div id="form">
                <h1 style="color:rgb(250, 107, 107);" id="description">Please, complete the following infos...</h1>
                    <form method="post" action="../process/insert.php">

                        <div class="rowTab">
                            <div class="labels">
                                <label>* First Name :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="firstName" class="input-field" required placeholder="Jean">
                            </div>
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                               <label>* Last Name :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="lastName" class="input-field" required placeholder="Nemare">
                            </div>        
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                                <label>* Birth Date :</label>
                            </div>
                            <div class="rightTab">
                                <input type="date" name="birthDate" class="input-field" required placeholder="01/02/1994">
                            </div>     
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                                <label>Phone Number :</label>
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
                        
                        <button class="action-button animate red">submit</button>
                    </form>
            </div>
        </div>
    </div>
    
</body>

</html>