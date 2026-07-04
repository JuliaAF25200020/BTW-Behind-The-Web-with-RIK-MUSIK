<?php  include 'header.php'; 
include "koneksi.php";
$new_arrivals = mysqli_query($conn,"SELECT * FROM products WHERE new_arrivals='1'");
$best_sellers = mysqli_query($conn,"SELECT * FROM products WHERE best_seller='1'");

?>
  <header id="home" class="hero">
        <h1 id="heroText">Expert in <br> <span style="color: var(--brand-gold);">Musical</span> <br> Instruments</h1>
    </header>
    <section class="visi-misi">
        <div class="box-vm">
            <h3 data-en="Our Vision" data-id="Visi Kami">Visi Kami</h3>
            <p data-en="To be the most trusted music store in West Kalimantan, providing original instruments for every musician." 
               data-id="Menjadi toko musik terpercaya di Kalimantan Barat yang menyediakan instrumen original bagi setiap musisi.">
               Menjadi toko musik terpercaya di Kalimantan Barat yang menyediakan instrumen original bagi setiap musisi.
            </p>
        </div>
        <div class="box-vm">
            <h3 data-en="Our Mission" data-id="Misi Kami">Misi Kami</h3>
            <p data-en="Providing high-quality musical equipment and excellent consultation services for the music community."
               data-id="Menyediakan peralatan musik berkualitas tinggi dan layanan konsultasi terbaik bagi komunitas musik.">
               Menyediakan peralatan musik berkualitas tinggi dan layanan konsultasi terbaik bagi komunitas musik.
            </p>
        </div>
    </section>

    <section id="products" class="section">
        <h2 class="section-title" data-en="Best Sellers" data-id="Paling Laris">Paling Laris</h2>
<div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

<?php
$count = 0;

while($row = mysqli_fetch_assoc($best_sellers)) {

   
    if($count % 4 == 0){
        ?>
        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
            <div class="row text-center">
        <?php
    }
?>

    <div class="col-md-3">
        <div class="product-card">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['images']); ?>" alt="<?php echo $row['name_product']; ?>">

            <h4><?php echo $row['name_product']; ?></h4>

            <span class="price">
                Rp <?php echo number_format($row['price'],0,',','.'); ?>
            </span>
            <p style="color: rgb(70, 214, 70); " data-en="available" data-id="tersedia"><?php echo $row['stock']; ?></p>

           <div class="row g-2 align-items-center ">    
                
                <button class="btn-order col-9" onclick="pesanWA('<?php echo $row['name_product']; ?>')" >WA</button>
               <div class="col-3">
                 <?php
                if(isset($_SESSION['id'])){
                ?>
                  <a href="add_cart.php?id=<?= $row['id_product']; ?>" style="color: black;">
                    <span class="material-symbols-outlined" style="font-size: 32px;">
                        add_circle
</span>
</a>

<?php
                }else{
                ?>
                    <a href="login.php" style="color: black;">
                        <span class="material-symbols-outlined" style="font-size: 32px;">
                            add_circle
                        </span>
                    </a>
                <?php
                }
                ?>
                <div id="qty<?= $row['id_product']; ?>" style="display:none; margin-top:10px;">
                    <button class="btn btn-sm btn-secondary" onclick="minusCart(<?= $row['id_product']; ?>')">
                        -
                    </button>

                    <span id="jumlah<?= $row['id_product']; ?>" style="padding:0 15px; font-weight:bold;">
                        1
                    </span>

                    <button class="btn btn-sm btn-secondary" onclick="plusCart(<?= $row['id_product']; ?>')">
                        +
                    </button>
                     
       </div>
</div> 
</div>
</div> 

    </div>

<?php
    $count++;

    // Close the slide after 4 items or at the last product
    if($count % 4 == 0 || $count == mysqli_num_rows($best_sellers)){
        ?>
            </div>
        </div>
        <?php
    }
}
?>

    </div>

    <button class="carousel-control-prev" type="button"
        data-bs-target="#productCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
        data-bs-target="#productCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
</section>

<section class="section container-visit">

         <h2 class="section-title" data-en="Visit Our Store" data-id="Kunjungi Toko Kami">Kunjungi Toko Kami</h2>


  <div class="row g-4">

    
    <div class="col-lg-8">
      <div class="card border-0 card-img-overlay-custom">
        <img src="images/alamat.jpg" alt="Store">

        <div class="overlay-text">
          Jln. Parit haji Husen 2, samping Jl. Padat Karya <br>
          No.Paris 2, Kota Pontianak, Kalimantan Barat 78124
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="col-lg-4 d-flex flex-column gap-4">

      <!-- MAP CARD -->
      <div class="card border-0 card-img-overlay-mini">
        <div class="map-box">
                <iframe class="dark-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8152!2d109.3444!3d-0.0634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59f77f0a7933%3A0x2a98f16b2e3e9d8c!2sJl.%20Parit%20Hj.%20Husin%20II%2C%20Pontianak!5e0!3m2!1sid!2sid!4v1710000000000" width="100%" height="350" style="border:0;" allowfullscreen=""></iframe>
            </div>

        <div class="overlay-text">
          <h5>Langsung menuju Google Maps!</h5>
        </div>
      </div>

      <!-- INSTAGRAM CARD -->
       
      <a href="https://www.instagram.com/rik_musik/" class="card border-0 card-img-overlay-mini" style="display: block;">
        <img src="images/Screenshot (276).png" alt="Map">

        <div class="overlay-text">
        <h5>YUK! Follow kami di IG untuk updates!</h5>
      </div>

    </a>
 
    </div>

  </div>

</section>
<section class=" section"> 
           <h2 class="section-title" data-en="Category" data-id="Kategori">Kategori</h2>

  <div class="category-container" >
    <a class="category-item" href="eg.php" >
      <img src="images/guitar cat.webp" class="icon" alt="Guitar">
      <span>Electric Guitars</span>
    </a>

  <a class="category-item" href="eg.php" >
    <img src="images/acoustic/Gitar Akustik Baby Martin Hitam.png" class="icon" alt="acoustic">
    <span>Acoustic Guitars</span>
                </a>

  <a class="category-item" href="bass.php" >
    <img src="images/bass/Bass cort C4 plus.png" class="icon" alt="Basses">
    <span>Bass Guitars</span>
                </a>

  <a class="category-item" href="accessories.php" >
    <img src="images/NUX MG-300 Multi Modeling Effect.jpg" class="icon" alt="accessories">
    <span>Accessories</span>
                </a>
  
  </div>
</section>

<section id="products" class="section">
    
        <h2 class="section-title" data-en="New Arrivals" data-id="Pendatang Baru">Pendatang Baru</h2>
        <div id="newarrivalCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

<?php
$count = 0;

while($row = mysqli_fetch_assoc($new_arrivals)) {

    // Start a new slide every 4 items
    if($count % 4 == 0){
        ?>
        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
            <div class="row text-center">
        <?php
    }
?>

    <div class="col-md-3">
        <div class="product-card">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['images']); ?>" alt="<?php echo $row['name_product']; ?>">

            <h4><?php echo $row['name_product']; ?></h4>

            <span class="price">
                Rp <?php echo number_format($row['price'],0,',','.'); ?>
            </span>
           <p style="color: rgb(70, 214, 70); " data-en="available" data-id="tersedia"><?php echo $row['stock']; ?></p>

           <div class="row g-2 align-items-center ">    
                
                <button class="btn-order col-9" onclick="pesanWA('<?php echo $row['name_product']; ?>')" >WA</button>
               <div class="col-3">
                 <?php
                if(isset($_SESSION['id'])){
                ?>
                  <a href="add_cart.php?id=<?= $row['id_product']; ?>" style="color: black;">
                    <span class="material-symbols-outlined" style="font-size: 32px;">
                        add_circle
</span>
</a>

<?php
                }else{
                ?>
                    <a href="login.php" style="color: black;">
                        <span class="material-symbols-outlined" style="font-size: 32px;">
                            add_circle
                        </span>
                    </a>
                <?php
                }
                ?>
                <div id="qty<?= $row['id_product']; ?>" style="display:none; margin-top:10px;">
                    <button class="btn btn-sm btn-secondary" onclick="minusCart(<?= $row['id_product']; ?>')">
                        -
                    </button>

                    <span id="jumlah<?= $row['id_product']; ?>" style="padding:0 15px; font-weight:bold;">
                        1
                    </span>

                    <button class="btn btn-sm btn-secondary" onclick="plusCart(<?= $row['id_product']; ?>')">
                        +
                    </button>
                     
       </div>
</div> 
</div>
</div> 

    </div>
<?php
    $count++;

    // Close the slide after 4 items or at the last product
    if($count % 4 == 0 || $count == mysqli_num_rows($new_arrivals)){
        ?>
            </div>
        </div>
        <?php
    }
}
?>

    </div>

    <button class="carousel-control-prev" type="button"
        data-bs-target="#newarrivalCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
        data-bs-target="#newarrivalCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
    </section>
  <?php include 'footer.php'; ?>