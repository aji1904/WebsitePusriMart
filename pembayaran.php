<?php include './page/header.php'; ?> 
<?php 
error_reporting(0);
require_once 'backend/koneksi.php';
session_start();

$sessionUsername = $_SESSION['username'];

if (isset($sessionUsername)) {

?>
<body>
	<div class="container-buy" style="top: 22%;">
		<div class="total-buy">
			<center>Total Yang anda Bayar</center>
		</div>
		<div>
			<p>Silahkan Bayar Ke Rekening Ini :<br>
			0513123981<br>
			masukkan sesuai dengan total barang Anda dan lalu konfirmasi pembayaran menggunakan foto struk yang anda bayar.	</p>
			Nama Barang : <?= $_POST['nama_produk'] ?><br>
			Harga Barang : Rp <?= $_POST['harga'] ?><br>
			Unit Barang : <?= $_POST['stok'] ?> Unit<br>
			Total : Rp <?= (int) $_POST['stok']*(int) $_POST['harga'] ?>
		</div>
		<center><a href="konfirmasi-pembayaran.php?stok=<?= $_POST['stok']?>&jmlh=<?= $_POST['jumlah_stok'] ?>&id=<?= $_POST['id'] ?>"><button class="beli-now">Konfirmasi Pembayaran</button></a></center>
	</div>
</body>
</html>
<?php 
} else {
	header("location: login.php");
}

?>
