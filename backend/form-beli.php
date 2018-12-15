<?php

	session_start();
	require_once "koneksi.php";

	
	$Susername = $_SESSION['username'];
	if (!isset($Susername)) {
		header("location: login.php");
		die();
	}

	$id_transaksi = uniqid();
	$nama_penerima = $_POST['nama'];
	$hp = $_POST['hp'];
	$kota_kecamatan = $_POST['kota_kecamatan'];
	$pos = $_POST['pos'];
	$alamat = $_POST['alamat'];
	$stok = $_POST['stok'];
	$jmlh = $_POST['jmlh'];
	$id = $_POST['id'];
	$nama_produk = $_POST['nama_produk'];
	
	$insert = "insert into transaksi values ('','$id_transaksi', '$nama_penerima', '$Susername', '$id', '$alamat', '$stok', '','','$nama_produk')";

	$query = mysqli_query($koneksi, $insert);
	 if ($query) {
	 	echo "sukses";
	 	header("location: ../konfirmasi-pembayaran.php?id=$stok&jmlh=$jmlh&id=$id");
	 } else {
	 	echo "gagal";
	 }
	 

?>