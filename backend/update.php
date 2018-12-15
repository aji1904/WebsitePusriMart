<?php 
require_once 'koneksi.php';
require_once 'init.php';


if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$nama_produk = $_POST['judul'];
	$harga = $_POST['harga'];
	$jmlh_produk = $_POST['banyak'];
	$desc_produk = $_POST['desc_produk'];

	$insert_produk = "UPDATE produk SET nama_produk='$nama_produk', harga='$harga',jmlh_produk='$jmlh_produk', desc_produk='$desc_produk' WHERE id_produk ='$id' ";

	$query = mysqli_query($koneksi, $insert_produk);
	if ($query) {
		header("Location: /WebsitePusriMart/produk_saya.php");
	} else {
		echo "Gagal" . mysqli_error($koneksi);
	}
	
}else{
	header("Location: /WebsitePusriMart/");
	die();
}

?>