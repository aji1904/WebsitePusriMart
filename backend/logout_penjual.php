<?php

session_start();


if(isset($_SESSION['user_penjual'])) {
    unset($_SESSION['user_penjual']);
}

header('Location: /WebsitePusriMart/login_penjual.php');