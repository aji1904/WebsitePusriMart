<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Daftar Penjual PUSRIMART</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/daftar_penjual.php" style="margin: 0px 10px;">
					<input class="w3-input daftar-input" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input daftar-input" type="password" name="password" required placeholder="Password">
					<input class="w3-input daftar-input" type="text" name="alamat" required placeholder="Alamat PUSRIMART">
					
					<select class="style-select" style="padding: 5px;" name="lokasi_pusrimart">
						<option> -- Pilih PUSRIMART Anda --</option>
						<option value="KANTOR PPD JATENG">KANTOR PPD (JATENG)</option>
						<option value="WISMA 101 JAKARTA">WISMA 101 (JAKARTA)</option>
						<option value="GPP PRINGSEWU LAMPUNG">GPP PRINGSEWU (LAMPUNG)</option>
						<option value="GPP DEMAK JATENG">GPP DEMAK (JATENG)</option>
						<option value="GPP GROBOGAN JATENG">GPP GROBOGAN (JATENG)</option>
						<option value="GPP KARANGANYAR JATENG">GPP KARANGANYAR (JATENG)</option>
						<option value="GPP PURWOREJO JATENG">GPP PURWOREJO (JATENG)</option>
						<option value="GPP MARTAPURA SUMSEL">GPP MARTAPURA (SUMSEL)</option>
						<option value="GPP LUBUK LINGGAU SUMSEL">GPP LUBUK LINGGAU (SUMSEL)</option>
						<option value="GPP BREBES JATENG">GPP BREBES (JATENG)</option>
						<option value="GPP BANJARNEGARA JATENG">GPP BANJARNEGARA (JATENG)</option>
						<option value="GPP PEKALONGAN JATENG">GPP PEKALONGAN (JATENG)</option>
						<option value="GPP PATI JATENG">GPP PATI (JATENG)</option>
						<option value="GPP MAGELANG JATENG">GPP MAGELANG (JATENG)</option>
						<option value="KANTOR PPD DIY">KANTOR PPD (DIY)</option>
						<option value="KANTOR PPD BABEL">KANTOR PPD (BABEL)</option>
						<option value="GPP SRAGEN JATENG">GPP SRAGEN (JATENG)</option>
						<option value="GPP SUKOHARJO JATENG">GPP SUKOHARJO (JATENG)</option>
						<option value="GPP BENGKULU BENGKULU">GPP BENGKULU (BENGKULU)</option>
						<option value="KANTOR PPD KALBAR">KANTOR PPD (KALBAR)</option>
						<option value="GPP KEBUMEN JATENG">GPP KEBUMEN (JATENG)</option>
						<option value="UPP CILACAP JATENG">UPP CILACAP (JATENG)</option>
						<option value="KANTOR PPD JAMBI">KANTOR PPD (JAMBI)</option>
						<option value="GPP SLEMAN DIY">GPP SLEMAN (DIY)</option>
						<option value="GPP CEPU JATENG">GPP CEPU (JATENG)</option>
					</select>
					<div class="w3-center" style="padding: 20px 0px;"> 
						<button type="submit" name="login" class="w3-btn w3-green w3-round" style=" margin-right: 50px;">Daftar</button>
					<a href="index.php" class="w3-btn w3-green w3-round">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>