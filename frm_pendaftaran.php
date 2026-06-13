<form method="POST" action="sv_pendaftaran.php">
    <label data-en="Full Name" data-id="Nama Lengkap">Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan nama lengkap">

    <label>Email</label>
    <input type="email" name="email" placeholder="johndoe@email.com">

    <label>WhatsApp</label>
    <input type="text" name="wa" placeholder="08123456789">

    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan password">

   

    <button class="form-control btn" type="submit" style="background-color: var(--brand-gold); font-weight: bold;" name="daftar" data-id='Daftar' data-en='Register'>Daftar</button>
    <a href='login.php' style='color: black' data-id='Sudah ada akun? Masuk sekarang!' data-en='Already have an account? Login now!'>Sudah ada akun? Masuk sekarang!</a>

</form>
