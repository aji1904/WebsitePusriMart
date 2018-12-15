
<body>
	 <div>
	 	<div id="navbar">
	 		<font class="logo" style="cursor: pointer;">Pupuk Sriwijaya Mart</font>
	 		<div class="w3-dropdown-hover dropdown-space">
			    <button class="button provinsi " style="cursor: pointer;"><i class="fas fa-map-marker-alt" style="size: 20px; margin: 0px 5px;"></i> Pilih Lokasi<i class="fa fa-angle-down space-dropdown"></i></button>
			    <div class="w3-dropdown-content w3-bar-block w3-border" style="width: 600px;">
			    	<div class="w3-row">
						<div class="w3-col s6 w3-center">
							  <a href="#" class="w3-bar-item w3-button">SEMUA</a>
						      <a href="#" class="w3-bar-item w3-button">KANTOR PPD (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">WISMA 101 (JAKARTA)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP PRINGSEWU (LAMPUNG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP DEMAK (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP GROBOGAN (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP KARANGANYAR (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP PURWOREJO (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP MARTAPURA (SUMSEL)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP LUBUK LINGGAU (SUMSEL)</a>
						      <a href="#" class="w3-bar-item w3-button">PUSRIMART PALEMBANG (SUMSEL)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP BREBES (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP BANJARNEGARA (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP PEKALONGAN (JATENG)</a>
						</div>
						<div class="w3-col s6 w3-center">
						      <a href="#" class="w3-bar-item w3-button">GPP PATI (JATENG)</a>
							  <a href="#" class="w3-bar-item w3-button">GPP MAGELANG (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">KANTOR PPD (DIY)</a>
						      <a href="#" class="w3-bar-item w3-button">KANTOR PPD (BABEL)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP SRAGEN (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP SUKOHARJO (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP BENGKULU (BENGKULU)</a>
						      <a href="#" class="w3-bar-item w3-button">KANTOR PPD (KALBAR)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP KEBUMEN (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">UPP CILACAP (JATENG)</a>
						      <a href="#" class="w3-bar-item w3-button">KANTOR PPD (JAMBI)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP SLEMAN (DIY)</a>
						      <a href="#" class="w3-bar-item w3-button">GPP CEPU (JATENG)</a>	
						</div>
					</div> 
			    </div>
			</div>
	 		<form method="post" action="cari_produk.php" style="display: inline;">
	 		<input class="search" type="text" name="search" placeholder ="Cari Pupuk di Sini">
	 		<button class="cari" name="button"><i class="fa fa-search icon" style="size: 20px; color: gray; border-radius: 0px 5px 5px 0px;"></i></button>
	 		</form>	
			<div>

			<?php

				if (isset($_SESSION['username'])) {
					$sUsername = $_SESSION['username'];
					echo(
						"<div class='flex-container'>
								<div class='w3-dropdown-hover w3-round'>
							    <button class='w3-btn w3-orange w3-round' style='overflow:hidden; width: 100%;'>$sUsername</button>
							    <div class='w3-dropdown-content w3-bar-block w3-border' style='padding : 8px 0px; width: 175px;'>
							      <a href='profile.php' class='w3-bar-item w3-button'><i class='fa fa-user' style='padding-right: 10px;'></i>Profile Saya</a>
							      <a href='/WebsitePusriMart/barang-saya.php' class='w3-bar-item w3-button'><i class='fa fa-shopping-cart' style='padding-right: 10px;'></i>barang saya</a>
							      <a href='/WebsitePusriMart/transaksi-saya.php' class='w3-bar-item w3-button'><i class='fa fas fa-handshake' style='padding-right: 10px;'></i>Transaksi saya</a>
							    </div>
							  </div>

							<a href='/WebsitePusriMart/backend/logout.php' class='w3-btn w3-orange w3-round' style='margin-right: 8px; margin-left: 8px;'>Logout</a>
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
