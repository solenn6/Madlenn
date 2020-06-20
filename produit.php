<?php
include('header.php');
?>
        <section id="productPage">
            <h2> Nos Produits </h2>
            <div id="filtre">
                <h3> Filtrer par  :</h3>
                <button class="btn btn-default filter-button" data-filter="all">Categorie 1</button>
                <button class="btn btn-default filter-button" data-filter="web"> Categorie 2 </button>
                <button class="btn btn-default filter-button" data-filter="application"> Categorie 3</button>
            </div>
            <script src="js/script.js"></script>
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
</html>
