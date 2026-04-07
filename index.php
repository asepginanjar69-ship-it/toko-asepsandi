<?php
session_start();
include 'koneksi.php';
$data = mysqli_query($conn,"SELECT * FROM produk");
?>
<h2>Produk</h2>
<a href="cart.php">Keranjang</a> |
<a href="logout.php">Logout</a>

<?php while($p = mysqli_fetch_assoc($data)){ ?>
<div>
<img src="gambar/<?php echo $p['gambar']; ?>" width="100">
<h3><?php echo $p['nama_produk']; ?></h3>
<p>Rp <?php echo $p['harga']; ?></p>
<a href="tambah_keranjang.php?id=<?php echo $p['id']; ?>">Beli</a>
</div>
<?php } ?>
