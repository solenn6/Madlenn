<?php
    $id = $_GET['id'];
    require("connectdb.php");
    $req = $db->prepare("DELETE FROM product WHERE id_product=$id");
    $req->execute();
    header('location:admin2.php');