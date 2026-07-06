<form action="sv_pendaftaran.php" method="post">
        <input class="mb-3 form-control" type="text" name="username" placeholder="Username" required>

        <input class="mb-3 form-control" type="password" name="password" placeholder="Password" required>

        <input class="mb-3 form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password" required>

        <input class="mb-3 form-control" type="text" name="no_wa" placeholder="No WhatsApp" maxlength="15" required>

        <textarea class="mb-3 form-control" name="address" placeholder="Alamat" id="address" rows="3" required></textarea>

        <button class="form-control btn" type="submit" style="background-color: var(--brand-gold); font-weight: bold;" data-en="Register" data-id="Daftar">Daftar</button>
    </form>
