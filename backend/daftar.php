<?php

require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$lahir = $_POST['lahir'];
$no_hp = $_POST['no_hp'];
$gender = $_POST['gender'];

$sqlQuery = "insert into user values ($username,$name,$email,$password,$lahir,$no_hp,$gender)";
$qInsert = mysqli_query($koneksi,$sqlQuery);

if($qInsert) {
    header("Location: /WebsitePusriMart/daftar.php");
    die();
} 

echo "Gagal insert data <br/>";



