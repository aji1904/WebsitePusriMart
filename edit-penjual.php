<?php 
	session_start();
	
	$Susername = $_SESSION['user_penjual'];
	if (!isset($Susername)) {
		header("location: login.php");
		die();
	}
?>

<?php include './page/header.php'; ?>
<?php include './page/navbar_penjual.php'; ?>
<?php include './page/left_penjual.php'; ?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				EDIT PROFILE
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
						<form method="POST" action="./backend/edit-penjual.php">
							<table class="w3-table">
							<tr>
							  <th style="width: 200px;">Username</th>
							  <th style="width: 20px;">:</th>
							  <th><?php echo $row['user_penjual']; ?></th>
							</tr>
							<tr>
							  <th style="width: 200px;">Lokasi</th>
							  <th style="width: 20px;">:</th>
							  <th><?php echo $row['lokasi_pusri']; ?></th>
							</tr>
							<tr>
							  <th>Alamat</th>
							  <th>:</th>
							  <th><input type="text" name="alamat" value="<?php echo $row['alamat_penjual']; ?>"></th>
							</tr>
							
							</table>
						</div>

						<?php 
							}
						}
						?>
						<div class="button-edit">
							<button type="submit" class="w3-btn w3-green w3-round margin-edit" name="simpan">Simpan</button>
						</div>
	 				</div>
	 			</form>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
 