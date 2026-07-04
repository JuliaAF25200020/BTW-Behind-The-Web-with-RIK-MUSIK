<?php
require_once "../../koneksi.php";

if (!isset($_GET['id'])) {
    die("ID Produk tidak ditemukan.");
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM products WHERE id_product='$id'");

if(mysqli_num_rows($query) == 0){
    die("Data produk tidak ditemukan.");
}

$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h3>Edit Product</h3>
        </div>

        <div class="card-body">
            <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_product" value="<?= $row['id_product']; ?>">

                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="id_category" class="form-select" required>
                        <?php
                        $kategori = mysqli_query($conn,"SELECT * FROM category");
                        while($k=mysqli_fetch_assoc($kategori)){
                        ?>

                        <option value="<?= $k['id_category']; ?>" <?= ($k['id_category']==$row['id_category'])? "selected":""; ?>>
                        <?= $k['name_category']; ?>
                        </option>

                        <?php } ?>
                    </select>
                </div>

                <!-- Product -->
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name_product" class="form-control" value="<?= $row['name_product']; ?>" required>
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="<?= $row['price']; ?>" required>
                </div>

                <!-- Old Image -->
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <br>

                    <?php
                    $image = $row['images'];
                    $path = __DIR__ . "/uploads/" . $image;

                    if(file_exists($path)){
                    ?>
                        <img src="uploads/<?= $image; ?>" width="180" height="180" style="object-fit:contain;border:1px solid #ddd;padding:5px;">
                    <?php
                    }else{
                    ?>
                        <img src="data:image/jpeg;base64,<?= base64_encode($image); ?>" width="180" height="180" style="object-fit:contain;border:1px solid #ddd;padding:5px;">
                    <?php } ?>
                </div>

                <!-- New Image -->
                <div class="mb-3">
                    <label class="form-label">New Image (optional)</label>

                    <input type="file" name="images" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update Product</button>

                <a href="../index.php?page=products" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>