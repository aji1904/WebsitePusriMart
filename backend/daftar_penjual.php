<?php

require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$lokasi = $_POST['lokasi_pusrimart'];
$md5Pass = md5($password);

$sqlQuery = "insert into penjual ( user_penjual, password, lokasi_pusri, alamat_penjual) values ('$username','$md5Pass','$lokasi','$alamat')";
$qInsert = mysqli_query($koneksi,$sqlQuery);

if($qInsert) {
    header("Location: /WebsitePusriMart/login_penjual.php");
    die();
}else 
echo "USERNAME OR EMAIL ANDA SUDAH DI PAKAI";



