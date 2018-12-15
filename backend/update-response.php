<?php
session_start();

require 'koneksi.php'; 
$Susername = $_SESSION['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$lahir = $_POST['lahir'];
$no_hp = $_POST['no_hp'];
$gender = $_POST['gender'];

$query = "UPDATE user SET name='$nama', email='$email', lahir='$lahir', no_hp='$no_hp', gender='$gender' WHERE username='$Susername' ";

$update = mysqli_query($koneksi, $query);

if ($update) {
	header("location: ../profile.php");
	die();
} else {
	echo "gagal";
}

?>