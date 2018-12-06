<?php include './page/header.php'; ?>
<?php require_once './backend/koneksi.php'; ?>
<?php require_once './backend/init.php'; ?> 
<?php 

if(isset($_POST['konfirmasi'])){
	$jmlh_stok = (int) $_GET['jmlh'];
	$stok = (int) $_GET['stok'];
	$id = $_GET['id'];
	$foto =$_FILES['foto'];
	$tanggal = date("l, d-m-Y  h:i:sa");
	$session = $_SESSION['username'];

	$file = (new File('../'))->setPath('image/');
	$upload_image = $file->upload([$id => $foto]);

	$updatestok = $jmlh_stok-$stok;

	if ($upload_image->success()) {
		$pathImage = $upload_image->getSuccessPath();
		$foto_confirm = mysqli_real_escape_string($koneksi, $pathImage[$id]);

		$query_update = "UPDATE produk, user SET produk.jmlh_produk = '".$updatestok."', user.tanggal_beli = '".$tanggal."', user.confirm_image = '".$foto_confirm."' WHERE produk.id_produk = '".$id."' AND user.username = '".$session."' ";
		
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
		die();
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