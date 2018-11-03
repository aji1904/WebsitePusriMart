
<body>
	 <div>
	 	<div id="navbar">
	 		<font class="logo">Pupuk Sriwijaya Mart</font>
	 		<form method="post" action="cari_produk.php" style="display: inline;">
	 		<input class="search" type="text" name="search" placeholder ="Cari Pupuk di Sini">
	 		<button class="cari" name="button"><i class="fa fa-search icon" style="size: 20px; color: gray; border-radius: 0px 5px 5px 0px;"></i></button>
	 		</form>	
	 		<div class="w3-dropdown-hover dropdown-space">
			    <button class="button provinsi "><i class="fa fa-map-marker" style="size: 20px; margin: 0px 5px;"></i> Pilih Lokasi<i class="fa fa-angle-down space-dropdown"></i></button>
			    <div class="w3-dropdown-content w3-bar-block w3-border" style="width: 250px; border-radius: 5px;">
			      <a href="#" class="w3-bar-item w3-button">Semua</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Bangka Belitung</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Bengkulu</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi DIY (Yogyakarta)</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Jambi</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Jawa Tengah</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Lampung</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Sumatera Utara</a>
			      <a href="#" class="w3-bar-item w3-button">Provinsi Sumatera Selatan</a>
			    </div>
			</div>
			<div>

			<?php

				if (isset($_SESSION['username'])) {
					$sUsername = $_SESSION['username'];
					echo(
						"<div style='position: absolute; top: 10px; left: 1060px;'>
								<div class='w3-dropdown-hover w3-round'>
							    <button class='w3-btn w3-orange w3-round' style='overflow:hidden; width: 100%;'>$sUsername</button>
							    <div class='w3-dropdown-content w3-bar-block w3-border'>
							      <a href='profile.php' class='w3-bar-item w3-button'>Profile Saya</a>
							      <a href='upload-produk.php' class='w3-bar-item w3-button'>Upload Produk</a>
							      <a href='lihat-produk.php' class='w3-bar-item w3-button'>Produk Saya</a>
							    </div>
							  </div>

							<a href='/WebsitePusriMart/backend/logout.php' class='w3-btn w3-orange w3-round' style='margin-right: 5px; margin-left: 5px;'>Logout</a>
							<a href='/WebsitePusriMart/' class='w3-btn w3-orange w3-round'><i class='fa fa-shopping-cart'></i></a>
						</div>"
					);
				} else {
					echo(
						"
						<a href='./login.php'>
							<button class='login'>Login</button>
						</a>
						 
						<a href='./daftar.php'>
						 	<button class='daftar'>Daftar</button>
					 	</a>"
					);
				}
				?>
		</div>
		</div>
 	</div>
