<?php 
require_once 'koneksi.php';
require_once 'init.php';


if (isset($_POST['upload'])) {

	$username = $_SESSION['user_penjual'];
	$id_produk = "P_".uniqid();
	$nama_produk = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$jmlh_produk = $_POST['jmlh_produk'];
	$provinsi = $_POST['provinsi'];
	$kabupaten_kota = $_POST['kabupaten_kota'];
	$kategori = $_POST['kategori'];
	$jenis_produk = $_POST['jenis_produk'];
	$desc_produk = $_POST['desc_produk'];
	$foto = $_FILES['foto-produk'];

	$file = (new File('../'))->setPath('image/');
	$upload = $file->upload([$nama_produk => $foto]);

	if($upload->success()){
		$pathImage = $upload->getSuccessPath();
		$foto_produk = mysqli_real_escape_string($koneksi, $pathImage[$nama_produk]);
		$insert_produk = "insert into produk (id_produk, username, nama_produk, harga, jmlh_produk, desc_produk, kategori, jenis_produk, provinsi, kabupaten_kota, path_image)  values ('$id_produk','$username','$nama_produk','$harga','$jmlh_produk','$desc_produk','$kategori', '$jenis_produk', '$provinsi','$kabupaten_kota', '$foto_produk')";
		echo $insert_produk;
		$query = mysqli_query($koneksi, $insert_produk);
		if ($query) {
			header("Location: /WebsitePusriMart/profile_penjual.php");
		} else {
			echo "Gagal" . mysqli_error($koneksi);
		}
	}else {
		foreach ($upload->getErrors() as $errer) {
			echo $error;
		}
		die();
	}
}else{
	header("Location: /WebsitePusriMart/");
	die();
}

?>