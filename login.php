<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $data = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
    $d = mysqli_fetch_assoc($data);

    if($d){
        $_SESSION['id'] = $d['id'];
        header("Location: index.php");
    } else {
        echo "Login gagal";
    }
}
?>
<form method="POST">
<h2>Login</h2>
<input name="email"><br>
<input name="password" type="password"><br>
<button name="login">Login</button>
</form>
