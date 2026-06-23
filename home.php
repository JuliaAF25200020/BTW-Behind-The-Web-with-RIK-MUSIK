<?php  include 'header.php'; ?>
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

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="row text-center">

        <div class="col-md-3">
          <div class="product-card"> 
            <img src="images/electric/Gitar Elektrik LTD EC-256 Black Satin.jfif" alt="LTD"> 
            <h4>Gitar Elektrik LTD EC-256 Black Satin</h4> 
            <span class="price">Rp 6.800.000</span> 
            <button class="btn-order" onclick="pesanWA('LTD EC-256')">WA</button> 
        </div>
        </div>

        <div class="col-md-3">
          <div class="product-card"> 
            <img src="images/electric/Cort CR250 Vintage Burst Electric.jpg" alt="Cort">
            <h4>Cort CR250 Vintage Burst Electric</h4> 
            <span class="price">Rp 4.250.000</span> 
            <button class="btn-order" onclick="pesanWA('Cort CR250')">WA</button> 
        </div>
        </div>
<div class="col-md-3">
        <div class="product-card">
                <img src="images/acoustic/Gitar akustik fs100c ORIGINAL YAMAHA Hitam.png" alt="Cort Bass">
                <h4>Gitar akustik fs100c ORIGINAL YAMAHA Hitam</h4>
                <span class="price">Rp 1.898.999</span>
                <button class="btn-order" onclick="pesanWA('Cort Action Bass')">WA</button>
            </div>
</div>
<div class="col-md-3">
         <div class="product-card">
                <img src="images/electric/Gitar elektrik lagacy stratocaster original.png" alt="Cort Bass">
                <h4>Gitar elektrik lagacy stratocaster original</h4>
                <span class="price">Rp 1.350.000</span>
                <button class="btn-order" onclick="pesanWA('Gitar Elektrik Stratocaster')">WA</button>
            </div>
</div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row text-center">
        <div class="col-md-3">
          <div class="product-card">
                <img src="images/bass/Bass Ibanez GSR180 original.png" alt="Cort Bass">
                <h4>Bass Ibanez GSR180 original</h4>
                <span class="price">Rp 2.000.000</span>
                <button class="btn-order" onclick="pesanWA('Yamaha F310')">WA</button>
            </div>
        </div>
        <div class="col-md-3">
          <div class="product-card">
                <img src="images/acoustic/Gitar akustik elektrik yamaha CPX500II.png" alt="Cort Bass">
                <h4>Gitar akustik elektrik yamaha CPX500II</h4>
                <span class="price">Rp 2.200.000</span>
                <button class="btn-order" onclick="pesanWA('NUX MG-300')">WA</button>
            </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon rounded-circle p-2"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon  rounded-circle p-2"></span>
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

    <a class="category-item" href="ag.php">
      <img src="images/acoustic/Gitar Akustik Baby Martin Hitam.png" class="icon" alt="acoustic">
      <span>Acoutic Guitars</span>
    </a>

  <a class="category-item" href="bass.php">
    <img src="images/bass/Bass cort C4 plus.png" class="icon" alt="Basses">
    <span>Bass Guitars</span>
  </a>

  <a class="category-item" href="assecories.php">
    <img src="images/NUX MG-300 Multi Modeling Effect.jpg" class="icon" alt="assecories">
    <span>Assecories</span>
  </a>
  
  </div>
</section>

<section id="products" class="section">
    
        <h2 class="section-title" data-en="New Arrivals" data-id="Pendatang Baru">Pendatang Baru</h2>
        <div id="productCarousel_2" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="row text-center">

        <div class="col-md-3">
         <div class="product-card">
                <img src="images/electric/Gitar elektrik lagacy stratocaster original.png" alt="Cort Bass">
                <h4>Gitar elektrik lagacy stratocaster original</h4>
                <span class="price">Rp 1.350.000</span>
                <button class="btn-order" onclick="pesanWA('Gitar Elektrik Stratocaster')">WA</button>
            </div>
        </div>

        <div class="col-md-3">
         <div class="product-card">
                <img src="images/acoustic/Gitar akustik fs100c ORIGINAL YAMAHA Hitam.png" alt="Cort Bass">
                <h4>Gitar akustik fs100c ORIGINAL YAMAHA Hitam</h4>
                <span class="price">Rp 1.898.999</span>
                <button class="btn-order" onclick="pesanWA('Cort Action Bass')">WA</button>
            </div>
        </div>
<div class="col-md-3">
           <div class="product-card">
                <img src="images/guitar cat.webp" alt="">
                <h4>Gitar Elektrik Stratocaster</h4>
                <span class="price">Rp 2.300.000</span>
                <button class="btn-order" onclick="pesanWA('Gitar Elektrik Stratocaster')">WA</button>
            </div>
</div>
<div class="col-md-3">
         <div class="product-card">
                <img src="images/bass/Bass cort C4 plus.png" alt="Cort Bass">
                <h4>Bass cort C4 plus</h4>
                <span class="price">Rp 3.500.000</span>
                <button class="btn-order" onclick="pesanWA('Cort Action Bass')">WA</button>
            </div>
</div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row text-center">
        <div class="col-md-3">
          <div class="product-card">
                <img src="images/acoustic/Gitar akustik elektrik yamaha CPX500II.png" alt="Cort Bass">
                <h4>Gitar akustik elektrik yamaha CPX500II</h4>
                <span class="price">Rp 2.200.000</span>
                <button class="btn-order" onclick="pesanWA('NUX MG-300')">WA</button>
            </div>
        </div>
        <div class="col-md-3">
           <div class="product-card">
                <img src="images/assecories/Capo Ukulele Murah.png" alt="NUX">
                <h4>Capo Ukulele Murah</h4>
                <span class="price">Rp 25.000</span>
                <button class="btn-order" onclick="pesanWA('Elixir Strings')">WA</button>
            </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel_2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon rounded-circle p-2"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel_2" data-bs-slide="next">
    <span class="carousel-control-next-icon  rounded-circle p-2"></span>
  </button>

</div>    
    </section>
  <?=     @include 'footer.php'; ?>