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
                                    <a class="nav-link dropdown-toggle" href="produit.php" data-toggle="dropdown" style="color: #e25541">Notre Carte</a>
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
                                <li><a href="localisation.php" class="nav-link">Nos adresses</a
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
        <section id="productPage">
            <h2> Nos Produits </h2>
            <div class="row">
                <div class="col-md-4 col-lg-3"> <a class="dropdown-item" href="produit.php">Tous nos produits</a></div>
                <div class="col-md-4 col-lg-2"> <a class="dropdown-item" href="patisserie.php">Patisserie</a></div>
                <div class="col-md-4 col-lg-3">   <a class="dropdown-item" href="boulangerie.php">Boulangerie</a></div>
                <div class="col-md-4 col-lg-2">   <a class="dropdown-item" href="viennoiserie.php">Viennoiserie</a></div>
                <div class="col-md-4 col-lg-2">   <a class="dropdown-item" href="biscuiterie.php" style="color: #e25541">Biscuiterie</a </div>
            </div>
            <div id="displayPageProduct">
                <?php
                require_once('connectdb.php');
                $sql = "SELECT * FROM product WHERE product_categorie = 'patisserie'";
                $requete = $db->prepare($sql);
                $status = $requete->execute();
                if (!$status) {
                    print_r($requete->errorInfo());
                }
                while ($donnees = $requete->fetch()) {
                    ?>
                    <div id="pictureProduct">
                        <img src="<?php echo $donnees['product_picture']?>">
                        <?php
                        echo "<h4>", strip_tags($donnees['product_name']), "</h4>";
                        ?>
                    </div>
                    <?php
                }
                $requete->closeCursor();
                ?>
            </div>
        </section>
<?php include('footer.php'); ?>