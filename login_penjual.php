<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-login">

	
    <div style="padding-top: 20px;">
    	<center><font size="4">Login Penjual PUSRIMART</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/login_penjual.php" style="margin: 0px 10px;">
					<input class="w3-input daftar-input" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input daftar-input" type="password" name="password" required placeholder="Password">

				<div class="w3-center" style="padding: 20px 0px;"> 
					<button type="submit" name="login" class="w3-btn w3-green w3-round" style="width: 100%;">Login</button>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>