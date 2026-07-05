<?php
session_start();
include "koneksi.php";

$profileLink = isset($_SESSION['id']) ? "profile.php" : "login.php";
$current_page = basename($_SERVER['PHP_SELF']);

$jumlah_cart = 0;

if(isset($_SESSION['id'])){
    $id_users = $_SESSION['id'];
    $cart = mysqli_query($conn,"SELECT SUM(count) AS total FROM cart WHERE id_users='$id_users'");
    $data = mysqli_fetch_assoc($cart);
    $jumlah_cart = $data['total'];
    if($jumlah_cart==NULL){
        $jumlah_cart=0;
    }

}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rik Musik | Official Store</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
      <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <nav>
        <div class="logo-section">
            <img src="images/logorik.jpg" alt="Logo">
            <span class="logo-text" style="color: white; font-weight: 800;">RIK MUSIK</span>
        </div>

        <div class="search-wrapper">
            <i class="fa fa-search mb-3"></i>
            <input type="text" id="searchInput" placeholder="Cari alat musik...">
        </div>

        <div class="nav-right">
            <ul class="nav-links">
                <li><a href="home.php"  data-en="Home" data-id="Beranda" class="<?= ($current_page == 'home.php') ? 'active' : '' ?>">Beranda</a></li>
             
                <li class="dropdown">
                  <a class=" dropdown-toggle" href="#products" data-en="Products" data-id="Produk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produk
                   </a>
                    <ul class="dropdown-menu dropdown-menu-dark <?= ($current_page == 'eg.php' || $current_page == 'ag.php' || $current_page == 'bass.php' || $current_page == 'assecories.php') ? 'active' : '' ?>">
                        <li><a class="dropdown-item <?= ($current_page == 'eg.php') ? 'active' : '' ?>" href="eg.php">Gitar Elektrik</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'ag.php') ? 'active' : '' ?>" href="ag.php">Gitar Akustik</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'bass.php') ? 'active' : '' ?>" href="bass.php">Gitar Bass</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'assecories.php') ? 'active' : '' ?>" href="assecories.php">Aksesoris</a></li>
                    </ul>
                </li>
                <li><a href="service.php" data-en="Service" data-id="Servis" class="<?= ($current_page == 'service.php') ? 'active' : '' ?>">Servis</a></li>
                <li><a href="about.php" data-en="About" data-id="Tentang kami" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">Tentang kami</a></li>
            </ul>
            <a href="cart.php" style="position:relative; text-decoration:none;">

                <span class="material-symbols-outlined"
                style="color:gold;">
                    shopping_cart
                </span>

                <?php
                if($jumlah_cart>0){
                ?>

                <span
                style="
                position:absolute;
                top:-8px;
                right:-8px;
                width:20px;
                height:20px;
                border-radius:50%;
                background:red;
                color:white;
                font-size:12px;
                display:flex;
                justify-content:center;
                align-items:center;
                ">
                    <?= $jumlah_cart ?>
                </span>
                <?php } ?>
            </a>

            <?php
            $link = "login.php";

            if(isset($_SESSION['id'])){
                $link = "profile.php";
            }
            ?>

            <span
            class="material-symbols-outlined" onclick="window.location.href='<?= $link ?>'" style="color:gold;cursor:pointer;">
            account_circle
            </span>

            <button class="lang-btn" onclick="toggleLanguage()">EN / ID</button>

        </div>
    </nav>

  