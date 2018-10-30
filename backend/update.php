<?php 
require_once 'koneksi.php';

session_start();

if (isset($_POST['upload'])) {

$username = $_SESSION['username'];
$id_produk = "P_".uniqid();
$image = $_POST['image'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$jmlh_produk = $_POST['jmlh_produk'];
$provinsi = $_POST['provinsi'];
$kabupaten_kota = $_POST['kabupaten_kota'];
$desc_produk = $_POST['desc_produk'];

$update_produk = "update produk set  values ('$id_produk','$username','$nama_produk','$harga','$jmlh_produk','$desc_produk','$provinsi','$kabupaten_kota')";
$query = mysqli_query($koneksi, $insert_produk);

if ($query) {
	header("Location: /WebsitePusriMart/");
} else {
	echo "Gagal" . mysqli_error($koneksi);
}

	
}else{
	header("Location: /WebsitePusriMart/");
	die();
}

?>