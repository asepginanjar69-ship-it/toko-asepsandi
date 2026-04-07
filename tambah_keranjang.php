<?php
session_start();
include 'koneksi.php';
$id_user = $_SESSION['id'];
$id_produk = $_GET['id'];

mysqli_query($conn,"INSERT INTO keranjang VALUES(NULL,'$id_user','$id_produk',1)");
header("Location: cart.php");
?>
