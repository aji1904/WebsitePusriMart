<?php 
	session_start();
	
	$Susername = $_SESSION['username'];
	if (!isset($Susername)) {
		header("location: login.php");
		die();
	}
?>

<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>
<?php include './page/left.php'; ?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				EDIT PROFILE
	 				<hr class="garis-hr">
					 <div class="w3-row-padding" style="margin: 20px 0px;">
					 <?php
						require_once "./backend/koneksi.php";

						$select = "select * from user where username = '$Susername' ";
						$query = mysqli_query($koneksi, $select);
						$numrows = mysqli_num_rows($query);
						if ($numrows == 1) {
							foreach ($query as $row) { ?>

						<div class="profile-list">
						<form method="POST" action="./backend/update-response.php">
							<table class="w3-table">
							<tr>
							  <th style="width: 200px;">Username</th>
							  <th style="width: 20px;">:</th>
							  <th><?php echo $row['username']; ?></th>
							</tr>
							<tr>
							  <th>Nama</th>
							  <th>:</th>
							  <th><input type="text" name="nama" value="<?php echo $row['name']; ?>"></th>
							</tr>
							<tr>
							  <th>Email</th>
							  <th>:</th>
							  <th><input type="text" name="email" value="<?php echo $row['email']; ?>"></th>
							</tr>
							<tr>
							  <th>lahir</th>
							  <th>:</th>
							  <th><input type="text" name="lahir" value="<?php echo $row['lahir']; ?>"></th>
							</tr>
							<tr>
							  <th>no_hp</th>
							  <th>:</th>
							  <th><input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>"></th>
							</tr>
							<tr>
							  <th>Jenis Kelamin</th>
							  <th>:</th>
							  <th><input type="text" name="gender" value="<?php echo $row['gender']; ?>"></th>
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
 