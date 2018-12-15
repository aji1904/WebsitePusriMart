<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar_penjual.php'; ?>
<?php include './page/left_penjual.php'; ?>

<?php
require_once "./backend/koneksi.php";
$Susername = $_SESSION['user_penjual'];

$select = "select * from produk where username = '$Susername' ";
$query = mysqli_query($koneksi, $select);
$numrows = mysqli_num_rows($query);
?>
</div>
	 		<div class="right">
	 			<div>
	 				Daftar Produk Saya
	 				<hr class="garis-hr">
	 				<div class="w3-row-padding" style="margin: 20px 0px;">
					<?php
					if ($numrows > 0) {
						foreach ($query as $row) {
					?>				
									<div class="w3-quarter">
										<a href="detail-produk.php?id=<?= $row["id_produk"] ?>">

			 							<div class="w3-card w3-container w3-margin-bottom w3-round height-card-penjual" style="padding: 0px;">
			 							<div class="size-image">
			 								<img src="<?= $row['path_image'];?>" alt="BELUM_ADA" class="position-image">
			 							</div>
			 							<div class="card" style="height: 180px;">
											<div class="font-height container-text">
			 									<p style="margin: 0px;">
			 										<b><?php echo $row["nama_produk"]; ?></b> 
			 									</p>
			 								</div>
			 								<div style="color: red; font-size: 14px;">Rp. <?php echo $row["harga"]; ?></div>
			 								<div style="font-size: 13px;"><?php echo $row["provinsi"]; ?></div>
			 								<div style="font-size: 13px;"><?php echo $row["kabupaten_kota"]; ?></div>
			 								<div style="margin-top: 20px;">
			 								<a class="beli-now" href="update-produk.php?id=<?= $row["id_produk"] ?>">Edit</a>
			 								<a class="beli-now" href="./backend/delete.php?id=<?= $row["id_produk"] ?>">Hapus</a>
			 								</div>
			 							</div>
			 						</div>
			 						</a>
			 					</div>

	 				<?php 
	 					} 
					} else {
						echo "<center>Anda Belum Ada Produk</center>";
					}
					?>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
