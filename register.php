<?php
include 'koneksi.php';
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$nama','$email','$password')");
    header("Location: login.php");
}
?>
<form method="POST">
<h2>Register</h2>
<input name="nama" placeholder="Nama"><br>
<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>
<button name="register">Daftar</button>
</form>
