<?php
session_start();
include 'koneksi.php';

if(isset($_POST['checkout'])){
    $user = $_SESSION['id'];
    $alamat = $_POST['alamat'];
    $total = $_POST['total'];

    mysqli_query($conn,"INSERT INTO transaksi VALUES(NULL,'$user','$total','$alamat')");
    mysqli_query($conn,"DELETE FROM keranjang WHERE user_id='$user'");

    echo "Berhasil Checkout";
}
?>
<form method="POST">
<textarea name="alamat" placeholder="Alamat"></textarea>
<input type="hidden" name="total" value="<?php echo $_GET['total']; ?>">
<button name="checkout">Bayar</button>
</form>
