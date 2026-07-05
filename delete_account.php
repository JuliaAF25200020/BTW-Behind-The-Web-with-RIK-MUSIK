<?php
include "security.php";

$id = $_SESSION['id'];

// Hapus akun berdasarkan id
mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

// Hapus session
session_destroy();

// Kembali ke halaman login
header("Location: login.php");
exit;