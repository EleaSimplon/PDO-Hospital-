<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
    :root {
        --main-decor-color: rgb(238, 154, 123);
    }

    body {
    background: var(--main-background);
    font-family: Raleway ,Helvetica , sans-serif;
    text-align: center;
    background-color: rgb(255, 223, 211);
    color: rgb(238, 154, 123);
    text-decoration-color: rgb(238, 154, 123);
    }

    #projects {
    margin-top: 100px;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: var(--main-fonts-color);
    }

    #projects h3 {
    padding-top: 70px;
    }

    #projects p {
    padding: 5px;
    background: transparent;
    border: 2px solid var(--main-decor-color);
    clear: both;
    color: var(--main-decor-color);
    display: inline-block;
    font-family: var(--main-font-family);
    font-size: 1.5em;
    margin-bottom: 10px;
    opacity: 0.5;
    text-decoration: none;
    text-transform: uppercase;
    z-index: 10;
    }

    .clear {
        clear: both;
    }

    .clearfix {
        overflow: auto;
        zoom: 1;
    }

    .upper {
        text-transform: uppercase;
    }

   
    hr {
        background: var(--main-decor-color);
        margin: 2px;
        height: 3px;
        width: 150px;
        border-radius: 5px;
        border: hidden;
        margin-inline-start: auto;
        margin-inline-end: auto;
    }

    .work {
        display: flex;
        flex: 1;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .card {
        display: flex;
        flex-direction: column;
        margin: 20px;
        width: 500px;
        height: 570px;
        background: transparent;
        border: 1px solid var(--main-decor-color);
        clear: both;
        display: inline-block;
    }

    .card img {
        width: 100%;
        height: 50%;
        border-radius: 3px 3px 0px 0px;
    }

    .card .work-content {
        text-align: center;
        padding: 10px 5px;
        font-size: 0.9rem;
    }

    .card-title {
        font-size: 2vw;
        padding: 10px 0px;
        text-align: center;
    }

    .card a:hover {
        color: var(--main-decor-color);
    }

    .link{
        font-size: 2vw;
    }

    </style>

    <title>Patients et Rendez-vous</title>
</head>

<body>
    
    <?php if (isset($_GET["message"])): ?>
        <div style="padding: 10px; width:25vw; background:orange; color:#fff;">
            <?=$_GET["message"]?>
        </div>
    <?php endif; ?>


    <div id="projects">
        <p>Accueil</p>
        <hr>
        <div class="work">
        
        <div class="card">
            <img class="work-img" src="docteur.jpg">
            <div class="work-content">
                    <div class="card-title">
                        Créer un patient ou un RDV👩‍🔬</br>
                    </div>
                Accéder à la création d'un patient et de son rendez-vous</br></br>
                <a class="link" href="./patients/ajout-patient.php">➡ Cliquez pour créer un nouveau patient</a></br></br></br>
                <a class="link" href="./patients/ajout-rendezvous.php">➡ Prendre un Rendez-Vous</a></br></br></br>
                <a class="link" href="./patients/ajout-patient-rdv.php">➡ Créer un patient et son Rendez-Vous</a></br>
            </div>
        </div>

        <div class="card">
            <img class="work-img" src="Doc.jpg">
            <div class="work-content">
                <div class="card-title">
                    Liste Patients & RDV👨‍🔬</br>
                </div>
                Accéder à la liste de patients et leurs RDV</br></br>
                <a class="link" href="./patients/liste-patients.php">➡ Liste patients</a></br></br></br>
                <a class="link" href="./patients/liste-rdv.php">➡ Liste des RDV</a></br>
            </div>
        </div>





</body>
</html>