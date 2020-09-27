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
<h1 id="titlePageAdmin"> Bienvenue dans l'espace administrateur</h1>
<section id="addProduct">
    <h2> Ajouter un produit </h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div>
            <div class="col-md-6 form-group">
                <label for="nameproduct">Nom Produit</label>
                <input type="text" name="nameproduct" class="form-control ">
            </div>
            <div class="col-md-6 form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control ">
            </div>
            <input type="radio" name="category" value="patisserie" id="patisserie" /> <label for="patisserie">patisserie</label><br />
            <input type="radio" name="category" value="viennoiserie" id="viennoiserie" /> <label for="viennoiserie">viennoiserie</label><br />
            <input type="radio" name="category" value="biscuiterie" id="biscuiterie" /> <label for="biscuiterie">biscuiterie</label><br />
            <input type="radio" name="category" value="boulangerie" id="boulangerie" /> <label for="boulangerie">boulangerie</label>
            <div>
                <div class="col-md-6 form-group">
                    <input type="submit" value="Upload" class="btn btn-primary px-3 py-3">
                </div>
            </div>
        </div>
    </form>
</section>
<section>
    <h2> Voir tous les produits </h2>
    <div id="displayPageProduct">
        <?php
        require_once('connectdb.php');
        $sql = "SELECT * FROM product";
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
                <a href="delete.php?id=<?php echo $donnees['id_product']; ?>">Supprimer</a>
            </div>
            <?php
        }
        $requete->closeCursor();
        ?>
    </div>
</section>
</body>
</html>
