<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Patisserie Madlenn</title>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="title"> <span>Patisserie Madlenn</span> </h1>
        <h2 class="title"><span>Saint-Malo</span></h2>
        <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <div class="container-fluid">
                        <div class="row" id="navMenu">
                            <div class="col-lg-3">
                                <li><a href="index.php" class="nav-link">Accueil</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li>
                                    <a class="nav-link dropdown-toggle" href="produit.php" data-toggle="dropdown">Notre Carte</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="produit.php">Tous nos produits</a>
                                        <a class="dropdown-item" href="patisserie.php">Patisserie</a>
                                        <a class="dropdown-item" href="boulangerie.php">Boulangerie</a>
                                        <a class="dropdown-item" href="viennoiserie.php">Viennoiserie</a>
                                        <a class="dropdown-item" href="biscuiterie.php">Biscuiterie</a>
                                    </div>
                                </li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="maison.php" class="nav-link">Notre Maison</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="localisation.php" class="nav-link" style="color: #e25541">Nos adresses</a
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
        <h2 class="hpadding"> Nos adresses </h2>
        <section id="pageLocalisation">
            <div class="emplacementBoutique">
                <div class="pictureLocalisation"> <img src="img/boutique.jpg" alt="Photo boutique patisserie" name="photoBoutique"></div>
                <div class="descriptionLocation">
                    <h3> La boutique Madlenn </h3>
                    <p> 23 Avenue des fontenelles, 35400 Saint-Malo</p>
                    <p class="ouvertureBoutique"> Tous les jours 8h-13h et 16h-19h</p>
                    <p class="ouvertureBoutique"> Le dimanche 8h-13h </p>
                    <div class="ligneBus" id="busMadlenn">
                        <img src="img/fontenelles.PNG">
                        <p> fontenelles </p>
                    </div>
                    <a  href="https://www.google.fr/maps/place/23+Avenue+des+Fontenelles,+35400+Saint-Malo/@48.6684153,-1.981902,17z/data=!3m1!4b1!4m5!3m4!1s0x480e82313f11fda7:0xcf617d143af3c2a0!8m2!3d48.6684153!4d-1.9797133"><img src="img/location.png" alt="logo de localisation" name="logo de localisation">Plan </a>
                </div>
            </div>
            <div class="emplacementBoutique">
                <div class="pictureLocalisation"> <img src="img/saintservan.jpeg" alt="Photo stand Marché" name="photoMarche"></div>
                <div class="descriptionLocation">
                    <h3> Marché de Saint-Servan </h3>
                    <p> 3 Place Bouvet, 35400 Saint-Malo</p>
                    <p>Mardi et Vendredi</p>
                    <div class="ligneBus" id="busStServan">
                        <img src="img/saintServanBus.PNG">
                        <p> Paramé </p>
                    </div>
                    <a href="https://www.google.fr/maps/place/3+Place+Bouvet,+35400+Saint-Malo/@48.6377961,-2.0193843,17z/data=!3m1!4b1!4m5!3m4!1s0x480e813f17157371:0x5e357949377a84ff!8m2!3d48.6377961!4d-2.0171956"><img src="img/location.png" alt="logo de localisation" name="logo de localisation">Plan</a>
                </div>
            </div>
            <div class="emplacementBoutique">
                <div class="pictureLocalisation"> <img src="img/parame.jpg" alt="Photo stand Marché" name="photoMarche"></div>
                <div class="descriptionLocation">
                    <h3> Marché de Paramé </h3>
                    <p> 1 Avenue de la Borderie, 35400 Saint-Malo</p>
                    <p> Mercredi et Samedi</p>
                    <div class="ligneBus" id="busParame">
                        <img src="img/parameBus.PNG">
                        <p> Paramé </p>
                    </div>
                    <a href="https://www.google.fr/maps/place/1+Avenue+de+la+Borderie,+35400+Saint-Malo/@48.6589805,-1.9841398,17z/data=!3m1!4b1!4m5!3m4!1s0x480e83cd99ac300f:0x917fedba13a4a01e!8m2!3d48.6589805!4d-1.9819511"><img src="img/location.png" alt="logo de localisation" name="logo de localisation">Plan</a>
                </div>
            </div>
            <div class="emplacementBoutique">
                <div class="pictureLocalisation"> <img src="img/rocabey.jpg" alt="Photo stand Marché" name="photoMarche"></div>
                <div class="descriptionLocation">
                    <h3> Marché de Rocabey  </h3>
                    <p> Place des Halles, 35400 Saint-Malo</p>
                    <p> Jeudi et Samedi </p>
                    <div class="ligneBus" id="busRocabey">
                        <img src="img/rocabeyBus.PNG">
                        <p> Paramé </p>
                    </div>
                    <a href="https://www.google.fr/maps/place/Rue+des+Halles,+35400+Saint-Malo/@48.6522419,-2.006715,17z/data=!3m1!4b1!4m5!3m4!1s0x480e817aa56c04b5:0xf5dc375df8d64263!8m2!3d48.6522419!4d-2.0045263"> <img src="img/location.png" alt="logo de localisation" name="logo de localisation">Plan</a>
                </div>
            </div>
        </section>
<?php
include('footer.php');
?>
