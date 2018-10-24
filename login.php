<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-login">

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Login</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/login.php" style="margin: 0px 10px;">
					<input class="w3-input daftar-input" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input daftar-input" type="password" name="password" required placeholder="Password">

				<div class="w3-center" style="padding: 20px 0px;"> 
					<button type="submit" name="login" class="w3-btn w3-green w3-round" style=" margin-right: 50px;">Login</button>
				
					<a href="index.php" class="w3-btn w3-green w3-round">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>