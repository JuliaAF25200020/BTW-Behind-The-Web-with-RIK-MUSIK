<?php
include "../koneksi.php";

$query = mysqli_query($conn,"SELECT * FROM users");
?>

<div class="card shadow">

    <div class="card-header ">
        <h4>User List</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>No WA</th>
                    <th>Address</th>
                    <th>Role</th>
                </tr>
            </thead>

            <tbody>
            <?php while($row=mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['username']); ?></td>
                <td><?= htmlspecialchars($row['no_wa']); ?></td>
                <td><?= htmlspecialchars($row['address']); ?></td>

                <td>
                    <?php if($row['role']=="admin"){ ?>
                        <span class="badge bg-danger">Admin</span>
                    <?php }else{ ?>
                        <span class="badge bg-primary">Customer</span>
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>

            </tbody>
        </table>
    </div>
</div>