<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Daftar</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/daftar.php" style="margin: 0px 10px;">
					<input class="w3-input daftar-input" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input daftar-input" type="text" name="name" required placeholder="Your Name"> 
					<input class="w3-input daftar-input" type="text" name="no_hp" required placeholder="No hp"> 
					<input class="w3-input daftar-input" type="text" name="email" required placeholder="Your Email">
					<input class="w3-input daftar-input" type="password" name="password" required placeholder="Password">
					<input class="w3-input daftar-input" type="password" name="confirmpassword" required placeholder="Confirm Password">

					<label>Jenis Kelamin</label>
					<div style="padding: 10px; margin-bottom: 20px;">
						<input type="radio" name="gender" value="Laki-Laki" style="margin-right: 10px;">Laki-Laki
						<input type="radio" name="gender" value="Perempuan" style="margin: 0 10px 0 20px;">Perempuan
					</div>
					<label>Tanggal Lahir</label>					
						<input type="date"  name="lahir" class="w3-input daftar-input" style="margin: 0px;" >

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