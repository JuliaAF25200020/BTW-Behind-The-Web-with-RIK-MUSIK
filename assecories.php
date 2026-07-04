<?php  include 'header.php'; 
include "koneksi.php";

$query = mysqli_query($conn,"SELECT * FROM products WHERE id_category='4'");?>
   <header id="home" class="hero-as">
        <h1 id="heroText-as">Complete <br> <span style="color: var(--brand-gold);">Your</span> <br> Instrument</h1>
    </header>
 <section class="section">
        <h2 class="section-title" data-en="Assecories" data-id="Aksesoris">Aksesoris</h2>
        <div class="product-grid" id="productGrid">
              <?php while($row=mysqli_fetch_assoc($query)){ ?>
            <div class="product-card">
 <?php
                $path="products/uploads/".$row['images'];
                if(file_exists($path)){
            ?>

            <img src="<?= $path; ?>" alt="<?= $row['name_product']; ?>">

            <?php
                }else{
            ?>

            <img src="data:image/jpeg;base64,<?= base64_encode($row['images']); ?>" alt="<?= $row['name_product']; ?>">

            <?php } ?>                <h4><?php echo $row['name_product']; ?></h4>
                <span class="price">Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></span>
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
             <?php } ?>
            </div>
    </section>


 <?php     include 'footer.php'; ?>