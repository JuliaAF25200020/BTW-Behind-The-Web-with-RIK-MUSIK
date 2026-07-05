

<?php
include "header.php";
include "security.php";

$id_users = $_SESSION['id'];

$query = mysqli_query($conn,"
SELECT
    cart.id_cart,
    cart.count,
    products.id_product,
    products.name_product,
    products.price,
    products.images
FROM cart
JOIN products
ON cart.id_product = products.id_product
WHERE cart.id_users='$id_users'
");

if(!$query){
    die(mysqli_error($conn));
}



$total =0;
$message = "Halo, saya ingin memesan produk:\n\n";
?>



<div class="container mt-5">
    <h2 class="mb-4 section-title">
        Shopping Cart
                <i class="fa fa-cart-shopping"></i>

    </h2>           


<<<<<<< HEAD
<?php
$total = 0;

if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        $subtotal = $row['count'] * $row['price'];
        $total += $subtotal;
            $message .= "- " . $row['name_product']
              . " (Qty: " . $row['count'] . ")"
              . " - Rp " . number_format($subtotal,0,",",".")
              . "\n";
?>

    <div class="card mb-3 ">

        <div class="card-body">

            <div class="row align-items-center">
                <!-- gambar -->
                <div class="col-md-2 text-center">

                    <?php
                    $path = "product/uploads/".$row['images'];
                    if(file_exists($path)){
                    ?>

                    <img
                    src="<?= $path ?>"
                    style="width:120px;height:120px;object-fit:contain;">

                    <?php
                        }else{
                    ?>

                    <img
                    src="data:image/jpeg;base64,<?= base64_encode($row['images']) ?>"
                    style="width:120px;height:120px;object-fit:contain;">
                    <?php } ?>
                </div>

                <!-- nama -->
                <div class="col-md-3">
                    <h5>
                        <?= $row['name_product']; ?>
                    </h5>

                    <p class="text-muted">
                        Rp <?= number_format($row['price'],0,",","."); ?>
                    </p>
                </div>

                <!-- qty -->
                <div class="col-md-3">
                    <a href="minus_cart.php?id=<?= $row['id_cart']; ?>" class="btn btn-outline-secondary">
                        <i class="fa fa-minus"></i>
                    </a>

                    <span class="mx-3 fw-bold">
                        <?= $row['count']; ?>
                    </span>

                    <a href="plus_cart.php?id=<?= $row['id_cart']; ?>" class="btn btn-outline-secondary">
                    <i class="fa fa-plus"></i>
                    </a>

                </div>

                <!-- subtotal -->
                <div class="col-md-2 fw-bold">
                    Rp <?= number_format($subtotal,0,",","."); ?>
                </div>

                <!-- delete -->
                <div class="col-md-2">
                <a href="delete_cart.php?id=<?= $row['id_cart']; ?>" class="btn btn-danger" onclick="return confirm('Hapus produk ini?/Delete this product?')">
                    <i class="fa fa-trash"></i>
                </a>
                </div>

            </div>

        </div>

    </div>

    <?php
    }
    ?>

    <div class="card">

        <div class="card-body">

            <div class="row">

                <div class="col-md-8">
                    <h4 data-en="Total Shopping" data-id="Total Belanja">Total Belanja</h4>
                </div>

                <div class="col-md-4 text-end">
                    <h3>Rp <?= number_format($total,0,",","."); ?></h3>
                </div>
            </div>

            <hr>

            <div class="d-flex justify-content-between">
                <a href="home.php" class="btn btn-secondary" data-en="Continue Shopping" data-id="Lanjut Belanja">
                    <i class="fa fa-arrow-left"></i>
                    Lanjut Belanja
                </a>

                <button  onclick='pesanWAmore(<?= json_encode($message) ?>)' class="btn btn-success">
                    Checkout
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <?php
    }else{
    ?>

    <div class="alert alert-warning" data-en="Your cart is still empty." data-id="Keranjang masih kosong.">
        Keranjang masih kosong.
    </div>

    <a href="home.php" class="btn btn-secondary" data-en="Start Shopping" data-id="Belanja Sekarang">
        Belanja Sekarang <span class="material-symbols-outlined" style="font-size: 32px;">

add_circle
</span>
    </a>

    <?php } ?>
</div>


<?php include 'footer.php'; ?>
=======
        <?php    include 'footer.php'; ?>
>>>>>>> 48aa705a626fe62dbbf6142bcfb5bf62c7030098
