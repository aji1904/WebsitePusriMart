<?php 
	session_start();
	
	$Susername = $_SESSION['user_penjual'];
	if (!isset($Susername)) {
		header("location: login_penjual.php");
		die();
	}
?>
<?php 
error_reporting(0); 
include './page/header.php';
include './page/navbar_penjual.php'; 
include './page/left_penjual.php'; 
?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				PROFILE ANDA
	 				<hr class="garis-hr">
					 <div class="w3-row-padding" style="margin: 20px 0px;">
					 <?php
						require_once "./backend/koneksi.php";

						$select = "select * from penjual where user_penjual = '$Susername' ";
						$query = mysqli_query($koneksi, $select);
						$numrows = mysqli_num_rows($query);
						if ($numrows == 1) {
							foreach ($query as $row) { ?>

						<div class="profile-list">
							<table class="w3-table">
							<tr>
							  <th>Username</th>
							  <th>: <?php echo $row['user_penjual']; ?></th>
							</tr>
							<tr>
							  <th style="width: 180px;">Lokasi PUSRIMART</th>
							  <th>: <?php echo $row['lokasi_pusri']; ?></th>
							</tr>
							<tr>
							  <th>Alamat</th>
							  <th>: <?php echo $row['alamat_penjual']; ?></th>
							</tr>
							</table>							
						</div>
						<div class="button-edit">
							<a href="edit-penjual.php" class="w3-btn w3-green w3-round margin-edit">Ubah</a>
						</div>

						<?php 
							}
						}else {
							echo "<center>Maaf Anda Harus Login Dulu</center>";
						}
						?>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
