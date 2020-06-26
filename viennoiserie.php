<?php
include('header.php');
?>
    <section id="productPage">
        <h2>Nos <span>viennoiseries</span></h2>
        <div id="filtre">
            <a class="dropdown-item" href="produit.php">Tous nos produits</a>
            <a class="dropdown-item" href="patisserie.php">Patisserie</a>
            <a class="dropdown-item" href="boulangerie.php">Boulangerie</a>
            <a class="dropdown-item active" href="viennoiserie.php">Viennoiserie</a>
            <a class="dropdown-item" href="biscuiterie.php">Biscuiterie</a>
        </div>
        <div id="displayPageProduct">
            <?php
            require_once('connectdb.php');
            $sql = "SELECT * FROM product WHERE product_categorie = 'viennoiserie'";
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
    <?php
    include('footer.php');
    ?>
