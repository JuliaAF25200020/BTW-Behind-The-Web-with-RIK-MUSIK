<?php
session_start();

if(!isset($_SESSION['id'])){
    header("Location:../login.php");
    exit();
}

if($_SESSION['role']!="admin"){
    header("Location:../profile.php");
    exit();
}

include "../koneksi.php";

$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$admin=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    <div class="wrapper d-flex">

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <div class="logo-box">
                    <!-- Ganti dengan logo website -->
                    <img src="../images/logorik.jpg" class="logo">
                    <h4>RIK MUSIK</h4>
                    <p><?= $admin['username']; ?></p>
                </div>

                <div class="menu">
                    <a class="<?=(!isset($_GET['page']) || $_GET['page']=='user')?'active':'';?>" href="?page=user">
                        <i class="fa-solid fa-users"></i>
                        User
                    </a>

                    <a class="<?=(isset($_GET['page']) && $_GET['page']=='products')?'active':'';?>" href="?page=products">
                        <i class="fa-solid fa-guitar"></i>
                        Produk
                    </a>

                   
                </div>
            </div>

            <div class="logout">
                <a href="../logout.php" onclick="return confirm('Yakin ingin logout?')">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="topbar">
                <h2>Dashboard Admin</h2>
            </div>

            <div class="page-content">
                <?php
                    $page=isset($_GET['page']) ? $_GET['page'] : "user";
                    switch($page){
                        case "products":
                            include "products/products.php";
                        break;
                        
                        default:
                            include "user/user.php";
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>