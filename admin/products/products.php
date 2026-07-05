<div class="card shadow">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Products</h4>

        <a href="products/add_product.php" class="btn btn-success">
            <i class="fa fa-plus"></i> Tambah Produk
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Category ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th width="170">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
            require_once __DIR__ . "/../../koneksi.php";
            $query = mysqli_query($conn,"SELECT * FROM products ORDER BY id_category ASC");
            while($row=mysqli_fetch_assoc($query)){
            ?>

                <tr>
                    <td><?= $row['id_category']; ?></td>
                    <td><?= $row['name_product']; ?></td>
                    <td>
                        Rp <?= number_format($row['price'],0,',','.'); ?>
                    </td>
                    <td>
                        <?php
                            $image = $row['images'];
                            
                            if(file_exists("products/uploads/".$image)){
                            ?>

                            <img style="width:100%;height:180px;object-fit:contain;margin-bottom:15px;" src="products/uploads/<?= $image; ?>" alt="<?= $row['name_product']; ?>">

                            <?php
                            }else{
                            ?>

                            <img style="width:100%;height:180px;object-fit:contain;margin-bottom:15px;" src="data:image/jpeg;base64,<?= base64_encode($image); ?>" alt="<?= $row['name_product']; ?>">
                        <?php } ?>
                    </td>
                    <td>
                        <a href="products/edit_product.php?id=<?= $row['id_product']; ?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>
                        </a>
                        
                        <a href="products/delete_product.php?id=<?= $row['id_product']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                        <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>