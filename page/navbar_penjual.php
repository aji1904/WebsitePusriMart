<body>
 	<div id="navbar" style="padding-bottom: 18px;">
 	<font class="logo" style="cursor: pointer;">PUSRIMART Produk</font>
<?php
	if (isset($_SESSION['user_penjual'])) {
		$sUsername = $_SESSION['user_penjual'];
?>
	<div class='flex-container'>
		<div class='w3-dropdown-hover w3-round' style="margin-left: 30px;">
	    	<button class='w3-btn w3-orange w3-round' style='overflow:hidden; width: 100%;'><?php echo $sUsername; ?></button>
		</div>
	</div>

<?php
	} else {
?>
	<a href='./login_penjual.php'>
		<button class='login' style="margin-left: 100px;">Login</button>
	</a>
<?php
	}
?>
	</div>
