<?php  
session_start();
require_once 'koneksi.php';

$sessionUser = $_SESSION['user_penjual'];
$id = $_GET['id'];
if (isset($sessionUser)) {
	$query = "DELETE FROM produk WHERE id_produk = '$id' ";
	$action = mysqli_query($koneksi, $query);
	if ($action) {
		header("location: ../produk_saya.php");	
	} else {
		echo "Gagal";
	}
	
} else {
	header("location: ../login_penjual.php");
}


?>