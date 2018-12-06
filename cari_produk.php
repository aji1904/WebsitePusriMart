<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>
<?php include './page/left.php'; ?>

<?php
include './backend/koneksi.php';

$string = $_POST['search'];
$PecahStr = (explode(" ", $string));
$perkata = "%".implode("% %", $PecahStr)."%";

$select_produk = "SELECT * FROM produk WHERE nama_produk LIKE '$perkata' ";
$query = mysqli_query($koneksi, $select_produk);
$numrows = mysqli_num_rows($query);

?>
	 		</div>
	 		<div class="right">
	 			<div>
	 				Produk yang anda cari
	 				<hr class="garis-hr">
	 				<div class="w3-row-padding" style="margin: 20px 0px;">
					<?php
					if ($numrows > 0) {
						foreach ($query as $row) {
					?>	

							<div class="w3-quarter">
							<a href="detail-produk.php?id=<?= $row["id_produk"] ?>">
 							<div class="w3-card w3-container w3-margin-bottom w3-round w3-green height-card" style="padding: 0px;">
 							<div class="size-image">
 								<img src="./image/produk1.png" alt="BELUM_ADA" class="position-image">
 							</div>
 							<div class="card">
								<div class="font-height container-text">
 									<p style="margin: 0px;">
 										<b><?php echo $row["nama_produk"]; ?></b> 
 									</p>
 								</div>
 								<div style="color: red; font-size: 14px;">Rp. <?php echo $row["harga"]; ?></div>
 								<div style="font-size: 13px;"><?php echo $row["provinsi"]; ?></div>
 								<div style="font-size: 13px;"><?php echo $row["kabupaten_kota"]; ?></div>
 							</div>
 						</div>
 						</a>
 					</div>
	 				<?php 
	 					} 
					} else {
						echo "<center>Produk yang anda cari tidak ditemukan.....</center>";
					}
					?>
	 				</div>
	 			
	 			</div>
	 		</div>

	 	</div>
	 </div>
</body>
</html>
