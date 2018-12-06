<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>
<?php include './page/left.php'; ?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				PROFILE ANDA
	 				<hr class="garis-hr">
					 <div class="w3-row-padding" style="margin: 20px 0px;">
					 <?php
						require_once "./backend/koneksi.php";
						$Susername = $_SESSION['username'];

						$select = "select * from user where username = '$Susername' ";
						$query = mysqli_query($koneksi, $select);
						$numrows = mysqli_num_rows($query);
						if ($numrows == 1) {
							foreach ($query as $row) { ?>

						<div class="profile-list">
							<table class="w3-table">
							<tr>
							  <th>Username</th>
							  <th>:</th>
							  <th><?php echo $row['username']; ?></th>
							</tr>
							<tr>
							  <th>Nama</th>
							  <th>:</th>
							  <th><?php echo $row['name']; ?></th>
							</tr>
							<tr>
							  <th>Email</th>
							  <th>:</th>
							  <th><?php echo $row['email']; ?></th>
							</tr>
							<tr>
							  <th>lahir</th>
							  <th>:</th>
							  <th><?php echo $row['lahir']; ?></th>
							</tr>
							<tr>
							  <th>no_hp</th>
							  <th>:</th>
							  <th><?php echo $row['no_hp']; ?></th>
							</tr>
							<tr>
							  <th>Jenis Kelamin</th>
							  <th>:</th>
							  <th><?php echo $row['gender']; ?></th>
							</tr>
							</table>
						</div>

						<?php 
							}
						}
						?>
						<div class="button-edit">
							<a href="edit.php" class="w3-btn w3-green w3-round margin-edit">Ubah</a>
							<a href="index.php" class="w3-btn w3-green w3-round">Kembali</a>
						</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
