
    <?php 
include "header.php";
?>
<main class="container mt-5 flex-fill">
            <h2 class="section-title" >Form Login</h2>

    <form action="sv_login.php" method="post">
<input class="mb-3 form-control" type="text" placeholder="username" name="username">
<input class="mb-3 form-control" type="password"  name="password" placeholder="password">
<button class="form-control btn" type="submit" style="background-color: var(--brand-gold); font-weight: bold;">login</button>
    </form>
    <a href='pendaftaran.php' style='color: black' date-en='Don't have an account? Register now!' data-in='Belum ada akun? Daftar sekarang!'>Belum ada akun? Daftar sekarang!</a>
</main>

<?php
include "footer.php";
?>

