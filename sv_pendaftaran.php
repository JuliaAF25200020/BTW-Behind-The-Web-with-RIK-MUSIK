<?= 
@include 'header.php'; 
include "koneksi.php";

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=md5($_POST['password']);
$no_wa=$_POST['no_wa'];
$address=$_POST['address'];

$cek=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

if(mysqli_num_rows($cek)>0){
    echo "<script>
    alert('Username sudah digunakan');
    history.back();
    </script>";
    exit();
}

mysqli_query($conn,"INSERT INTO users(username,password,no_wa,address,role) VALUES('$username','$password','$no_wa','$address','customer')");

echo "<script>alert('Pendaftaran berhasil'); window.location='login.php'; </script>";

include 'footer.php'; 
?>
