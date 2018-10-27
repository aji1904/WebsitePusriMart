<?php
require_once 'koneksi.php';
session_start();

$sessionUsername = $_SESSION['username'];

if(isset($sessionUsername)) {
    header("Location: /WebsitePusriMart/");
    die();
} 

$username = $_POST['username'];
$password = $_POST['password'];
$md5Pass = md5($password);

$sqlSelect = "select * from user where username = '$username' and password = '$md5Pass' ";
$qSelect = mysqli_query($koneksi , $sqlSelect);
$numRows = mysqli_num_rows($qSelect);

if($numRows == 1) {
    $_SESSION['username'] = $username;
    header("Location: /WebsitePusriMart/");
    die();
} 

echo(
    "<div>
        Username atau password salah, <a href='/WebsitePusriMart/login.php'>Login lagi</a>
    </div>"
);
