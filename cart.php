<?php
session_start();
include 'koneksi.php';
$id_user = $_SESSION['id'];

$data = mysqli_query($conn,"SELECT * FROM keranjang JOIN produk ON produk.id=keranjang.produk_id WHERE user_id='$id_user'");
$total=0;
?>
<h2>Keranjang</h2>
<?php while($d = mysqli_fetch_assoc($data)){
$sub = $d['harga'] * $d['jumlah'];
$total += $sub;
?>
<p><?php echo $d['nama_produk']; ?> - Rp <?php echo $sub; ?></p>
<?php } ?>
<h3>Total: Rp <?php echo $total; ?></h3>
<a href="checkout.php?total=<?php echo $total; ?>">Checkout</a>
