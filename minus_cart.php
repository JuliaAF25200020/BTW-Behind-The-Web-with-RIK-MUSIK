<?php
include "security.php";

$id_cart = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM cart WHERE id_cart='$id_cart'"));

/* jika jumlah tinggal satu maka hapus */
if($data['count']==1){
    mysqli_query($conn,"DELETE FROM cart WHERE id_cart='$id_cart' ");
}else{
    mysqli_query($conn,"UPDATE cart SET count=count-1 WHERE id_cart='$id_cart'");
}

header("Location: cart.php");
exit();

?>