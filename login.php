<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-green w3-border " style="width: 400px; border-radius: 10px; padding-bottom: 10px; 
		position: absolute;
		top: 38%;
		left: 50%;
		margin-top:-100px;
		margin-left:-200px;
		box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Login</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/login.php" style="margin: 0px 10px;">
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 20px 0px;" type="text" name="username" required placeholder="Username"> 
					<input class="w3-input" style="border: 1px solid #e0e0e0; border-radius: 10px; padding: 10px 20px; margin: 10px 0px;" type="password" name="password" required placeholder="Password">

				<div class="w3-center" style="padding: 20px 0px;"> 
					<button type="submit" name="login" class="w3-btn w3-white w3-round-large" style=" margin-right: 50px;">Login</button>
				
					<a href="index.php" class="w3-btn w3-white w3-round-large">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>