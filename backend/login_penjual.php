<?php
error_reporting(0);
require_once 'koneksi.php';
session_start();

$sessionUsername = $_SESSION['user_penjual'];

if(isset($sessionUsername)) {
    header("Location: /WebsitePusriMart/profile_penjual.php");
    die();
} 

$username = $_POST['username'];
$password = $_POST['password'];
$md5Pass = md5($password);

$sqlSelect = "select * from penjual where user_penjual = '$username' and password = '$md5Pass' ";
$qSelect = mysqli_query($koneksi , $sqlSelect);
$numRows = mysqli_num_rows($qSelect);

if($numRows == 1) {
    $_SESSION['user_penjual'] = $username;
    header("Location: /WebsitePusriMart/profile_penjual.php");
    die();
} else
echo(	
    "<div>
        Username atau password salah, <a href='/WebsitePusriMart/login_penjual.php'>Login lagi</a>
    </div>"
);
