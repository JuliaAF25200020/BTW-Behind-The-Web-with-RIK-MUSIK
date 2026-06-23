<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE php>
<php lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rik Musik | Official Store</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
      <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <nav>
        <div class="logo-section">
            <img src="../images/logorik.jpg" alt="Logo">
            <span class="logo-text" style="color: white; font-weight: 800;">RIK MUSIK</span>
        </div>

       

        <div class="nav-right">
            <ul class="nav-links">
                <li><a href="products.php"   class="<?= ($current_page == 'home.php') ? 'active' : '' ?>">Products</a></li>
             
               
                <li><a href="service.php"  class="<?= ($current_page == 'service.php') ? 'active' : '' ?>">Users</a></li>
                <li><a href="about.php"  class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">Orders</a></li>
            </ul>
                       



            <span class="material-symbols-outlined"
      onclick="window.location.href='login.php'"
      style="color: gold;">
    account_circle
</span>
            <span class="logo-text" style="color: white; font-weight: 800;">Welcome, Admin!</span>
        



        </div>
    </nav>

  