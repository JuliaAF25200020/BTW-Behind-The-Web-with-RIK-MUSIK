<?php     include 'header.php';
 include "koneksi.php"; 
 $success = false;
$errors = [];
 ?>
<main class="container mb-5 flex-fill mt-5">
    <h2 class="section-title" data-en="Form Registrations" data-id="Form Pendaftaran">Form Pendaftaran</h2>

    <?php if (!empty($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if($success): ?>
        <div class="success">Pendaftaran berhasil diproses dan disimpan ke session.</div>
    <?php endif; ?>

    <?php include 'frm_pendaftaran.php'; ?>
    <br>
        <a href='login.php' style='color: black' date-en='Already have an account? Login now!' data-in='Sudah ada akun? Masuk sekarang!'>Sudah ada akun? Masuk sekarang!</a>

</main>
 <?php  include 'footer.php'; ?>
 