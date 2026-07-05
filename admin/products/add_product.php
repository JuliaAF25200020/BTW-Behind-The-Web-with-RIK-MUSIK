<?php
require_once "../../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f4f6f9;">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3 class="mb-0">Add Product</h3>
        </div>

        <div class="card-body">
            <form action="save_product.php" method="POST" enctype="multipart/form-data">
                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label">Category</label>

                    <select name="id_category" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        <?php
                        $kategori = mysqli_query($conn,"SELECT * FROM category");
                        while($k = mysqli_fetch_assoc($kategori)){
                        ?>

                        <option value="<?= $k['id_category']; ?>">
                            <?= $k['name_category']; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Product Name -->

                <div class="mb-3">
                    <label class="form-label">Product Name</label>

                    <input type="text" name="name_product" class="form-control" placeholder="Enter product name" required>
                </div>

                <!-- Price -->

                <div class="mb-3">
                    <label class="form-label">Price</label>

                    <input type="number" name="price" class="form-control" placeholder="Enter price" required>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label">Product Image</label>

                    <input type="file" name="images" class="form-control" accept="image/*" required>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-success"> Save Product </button>

                <a href="../index.php?page=products" class="btn btn-secondary"> Cancel </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>