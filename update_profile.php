<?php
include "security.php";

$id=$_POST['id'];
$username=mysqli_real_escape_string($conn,$_POST['username']);
$no_wa=mysqli_real_escape_string($conn,$_POST['no_wa']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$password=$_POST['password'];

if($password!=""){
    $password=password_hash($password,PASSWORD_DEFAULT);

    mysqli_query($conn,"UPDATE users SET username='$username',no_wa='$no_wa',address='$address',password='$password' WHERE id='$id'");
}else{
    mysqli_query($conn,"UPDATE users SET username='$username',no_wa='$no_wa',address='$address' WHERE id='$id'");
}

header("Location:profile.php");