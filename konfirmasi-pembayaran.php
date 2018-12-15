<?php 
error_reporting(0);
include 'page/header.php';
require_once 'backend/koneksi.php';
require_once 'backend/init.php'; 
?> 
<?php 

if(isset($_POST['konfirmasi'])){
	$jmlh_stok = (int) $_GET['jmlh'];
	$stok = (int) $_GET['stok'];
	$id = $_GET['id'];
	$id_transaksi = uniqid();
	$foto =$_FILES['foto'];
	$alamat = $_POST['alamat'];
	$tanggal = date("l, d-m-Y  h:i:sa");
	$session = $_SESSION['username'];


	$file = (new File('./'))->setPath('image/konfirmasi/');
	$upload_image = $file->upload([$id => $foto]);

	$updatestok = $jmlh_stok-$stok;

	if ($upload_image->success()) {
		$pathImage = $upload_image->getSuccessPath();
		$foto_confirm = mysqli_real_escape_string($koneksi, $pathImage[$id]);

		$query_update = "UPDATE produk, transaksi SET produk.jmlh_produk = '".$updatestok."', transaksi.tanggal_transaksi = '".$tanggal."', transaksi.confirm_image = '".$foto_confirm."' WHERE produk.id_produk = '".$id."' AND transaksi.id_produk = '".$id."' ";
		
		$update_data = mysqli_query($koneksi, $query_update);
		if ($query_update) {
			header("Location: /WebsitePusriMart/index.php");
		} else {
			echo "Gagal" . mysqli_error($koneksi);
		}
	}else {
		foreach ($upload->getErrors() as $errer) {
			echo $error;
		}
	}
	
}

?>
<body>
	<div class="container-buy" style="top: 22%;">
		<div class="total-buy">
			<center>Konfirmasi Pembayaran</center>
		</div>
		
		<form method="POST" enctype="multipart/form-data">
		<div>
			<p>
				Silahkan Upload Tanda Bukti Pembayaran Anda :<br>
			</p>

			<input class="w3-input daftar-input" type="file" name="foto" accept="image/*" required placeholder="Upload Image">
			<p>
				Catatan: Jangan Berikan Struk ini kepada Orang lain, Agar tidak di salah gunakan.<br>
				Terima Kasih.
			</p>
		</div>
			<center>
				<button class="beli-now" type="submit" name="konfirmasi">Konfirmasi Pembayaran</button>
			</center>
		</form>
		</div>
</body>
</html>