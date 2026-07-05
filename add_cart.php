<?php
include "security.php";

if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}

$id_product = $_GET['id'];
$id_users   = $_SESSION['id'];

$cek = mysqli_query($conn,"SELECT * FROM cart WHERE id_product='$id_product' AND id_users='$id_users'");

if(mysqli_num_rows($cek)>0){
    mysqli_query($conn,"UPDATE cart SET count=count+1 WHERE id_product='$id_product' AND id_users='$id_users'");
}else{
    mysqli_query($conn,"INSERT INTO cart(id_product,id_users,count) VALUES('$id_product','$id_users',1)");
}

header("Location:cart.php");
exit();
?>