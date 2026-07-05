<?php
include "security.php";

$id_cart = $_GET['id'];

/* tambah jumlah */

mysqli_query($conn,"UPDATE cart SET count=count+1 WHERE id_cart='$id_cart'");

header("Location: cart.php");
exit();
?>