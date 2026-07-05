<?php
include "security.php";

$id=$_SESSION['id'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$data=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Profil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3>Edit Profil</h3>
            </div>

        <div class="card-body">
            <form action="update_profile.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $data['username']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Nomor WhatsApp</label>
                    <input type="text" name="no_wa" class="form-control" value="<?= $data['no_wa']; ?>" required>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" rows="4"><?= $data['address']; ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Password Baru</label>
                    <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah">
                </div>

                <button class="btn btn-warning">Simpan</button>
                <a href="profile.php" class="btn btn-secondary">
                    Batal
                </a>
            </form>
        </div>
    </div>

</body>
</html>