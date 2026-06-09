<!DOCTYPE php>
<php lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rik Musik | Official Store</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=account_circle" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=shopping_cart" />
      <link rel="stylesheet" href="css/style.css">
</head>
<body>

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
                <li><a href="home.php"  data-en="Home" data-id="Beranda">Beranda</a></li>
             
                <li class="dropdown">
                  <a class=" dropdown-toggle" href="#products" data-en="Products" data-id="Produk" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Produk
                   </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="eg.php">Electric Guitars</a></li>
                        <li><a class="dropdown-item" href="ag.php">Acoustic Guitars</a></li>
                        <li><a class="dropdown-item" href="bass.php">Bass Guitars</a></li>
                        <li><a class="dropdown-item" href="assecories.php">Assecories</a></li>
                    </ul>
                </li>
                <li><a href="service.php" data-en="Service" data-id="Servis">Servis</a></li>
                <li><a href="about.php" data-en="About" data-id="Tentang kami">Tentang kami</a></li>
            </ul>
                        <span class="material-symbols-outlined" style="color: gold;">
shopping_cart
</span>
            <button class="lang-btn" onclick="window.location.href='login.php'">Log in</button>

            <button class="lang-btn" onclick="toggleLanguage()">EN / ID</button>


        </div>
    </nav>

  