<?php
    if (!empty($_FILES)) {
    foreach ($_FILES as $file) {
        $source = $file['tmp_name'];
        $dest = 'img/'.$file['name'];
        move_uploaded_file($source, $dest);
        if ($file['error'] == UPLOAD_ERR_OK) {
            echo '<div>Fichier uploadé</div>';
        } else {
            echo 'Erreur';
        }
    }
    require("connectdb.php");
    $productName= $_POST['nameproduct'];
    $productCategorie= $_POST['category'];
    $req = $db->prepare("INSERT INTO product(product_name, product_picture, product_categorie) 
        VALUES (:productName, :picture, :categorie)");
    $req->bindParam(':productName', $productName);
    $req->bindParam(':picture', $dest);
    $req->bindParam(':categorie', $productCategorie);
    $req->execute();
}


