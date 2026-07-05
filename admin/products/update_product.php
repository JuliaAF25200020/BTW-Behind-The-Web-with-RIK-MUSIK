<?php

require_once "../../koneksi.php";

$id = $_POST['id_product'];
$id_category = $_POST['id_category'];
$name_product = $_POST['name_product'];
$price = $_POST['price'];

$image = $_FILES['images']['name'];
$tmp = $_FILES['images']['tmp_name'];

if($image != ""){
    move_uploaded_file(
        $tmp,
        __DIR__ . "/uploads/" . $image
    );

    $sql = "UPDATE products SET
    id_category='$id_category',
    name_product='$name_product',
    price='$price',
    images='$image'
    WHERE id_product='$id'";
}else{
    $sql = "UPDATE products SET
    id_category='$id_category',
    name_product='$name_product',
    price='$price'
    WHERE id_product='$id'";
}

if(mysqli_query($conn,$sql)){
    header("Location:../index.php?page=products");
    exit;
}else{
    echo "<h3>Gagal Update Data</h3>";
    echo mysqli_error($conn);
}
?>