<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-green w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Daftar</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/daftar.php" style="margin: 0px 10px;">
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="text" name="nama" required placeholder="Your Name"> 
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="number" name="no_hp" required placeholder="No hp"> 
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="text" name="email" required placeholder="Your Email">
					
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="password" name="password" required placeholder="Password">
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 15px 0px;" type="password" name="confirmpassword" required placeholder="Confirm Password">

				<div class="w3-center" style="padding: 20px 0px;"> 
					<button type="submit" name="login" class="w3-btn w3-white w3-round-large" style=" margin-right: 50px;">Daftar</button>
				
					<a href="index.php" class="w3-btn w3-white w3-round-large">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>