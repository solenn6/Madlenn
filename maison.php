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
                                <li><a href="maison.php" class="nav-link" style="color: #e25541">Notre Maison</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="localisation.php" class="nav-link">Nos adresses</a
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
        <div id="ensembleMaison1">
            <div>
                <img src="img/EASY1158.JPG" id="imgMaison1">
            </div>
            <div  id="textMaison1">
                <h3> Bienvenue chez Madlenn</h3>
                <p> Petit-déjeuner gourmand, moment à partager
                    ou goûter savoureux, découvrez notre gamme de produits de pâtisserie et boulangerie adaptée à vos envies</p>
            </div>
        </div>
        <section>
            <div id="ensembleMaison2">
                <div id="textMaison2">
                    <p>Tous les jours en boutique et du mardi au samedi sur les marchés de Saint-Malo, régalez vous de nos viennoiseries,
                        biscuits et pâtisseries</p>
                </div>
                <img src="img/produit1.jpg" id="imgMaison2">
            </div>
        </section>
        <div id="ensembleMaison3">
            <div>
                <img src="img/EASY1273.JPG" id="imgMaison3">
            </div>
            <div id="textMaison3">
                <p> Vous y trouverez de grands classiques ainsi que des créations inspirées.
                Le tout fabriqué par nos soins, de façon artisanale avec de bons produits et dans les règles de l'art</p>
            </div>
        </div>
<?php
include('footer.php');
?>
</html>
