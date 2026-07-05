<?php
include "security.php";

$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya|RIK MUSIK</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

<div class="wrapper d-flex">

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <div class="profile-box">
                <i class="fa-solid fa-circle-user"></i>
                <h4><?= $data['username']; ?></h4>
                <p><?= ucfirst($data['role']); ?></p>
            </div>

            <div class="menu">
                <a class="active" href="profile.php">
                    <i class="fa-solid fa-user"></i>
                    Profil Saya
                </a>

                <a href="home.php">
                    <i class="fa-solid fa-house"></i>
                    Halaman Utama
                </a>
            </div>
        </div>

        <div class="logout">
            <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h2>Pengaturan Akun</h2>
        <div class="card card-profile">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title mb-0">Informasi Akun</h4>
                    
                    <div>
                        <a href="edit_profile.php" class="btn btn-warning me-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>

                        <a href="delete_account.php" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus akun? Tindakan ini tidak dapat dibatalkan.')">
                            <i class="fa-solid fa-trash"></i>
                            Delete
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="info-title">Username</div>
                        <div class="info-value">
                            <?= $data['username']; ?>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="info-title">Nomor WhatsApp</div>
                        <div class="info-value">
                            <?= $data['no_wa']; ?>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="info-title">Alamat</div>
                        <div class="info-value">
                            <?= $data['address']; ?>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="info-title">Role</div>
                        <div class="info-value">
                            <?= ucfirst($data['role']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>