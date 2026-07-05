<?php
require_once "../../koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn,
"DELETE FROM products
WHERE id_product='$id'");

if($query){

    header("Location:../index.php?page=products");
    exit;

}else{

    die(mysqli_error($conn));

}

?>