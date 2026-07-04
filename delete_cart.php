<?php
include "security.php";

$id_cart = $_GET['id'];

mysqli_query($conn,"DELETE FROM cart WHERE id_cart='$id_cart'");

header("Location: cart.php");
exit();

?>