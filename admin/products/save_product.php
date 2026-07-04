<?php
require_once __DIR__ . "/../../koneksi.php";

$id_category = $_POST['id_category'];
$name_product = $_POST['name_product'];
$price = $_POST['price'];

$image = $_FILES['images']['name'];
$tmp   = $_FILES['images']['tmp_name'];

move_uploaded_file($tmp, __DIR__ . "/uploads/" . $image);

$sql = "INSERT INTO products (id_category,name_product,price,images) VALUES ('$id_category','$name_product','$price','$image')";

if(mysqli_query($conn,$sql)){

    echo "Berhasil disimpan";

}else{

    die(mysqli_error($conn));

}

header("Location:../index.php?page=products");
exit;
?>