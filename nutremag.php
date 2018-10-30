<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>
<?php include './page/left.php'; ?>

<?php
require_once "./backend/koneksi.php";

$select = "select * from produk where jenis_produk = 'nutremag' ";
$query = mysqli_query($koneksi, $select);
?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				Produk Inovasi
	 				<hr class="garis-hr">
	 				<div class="w3-row-padding" style="margin: 20px 0px;">
	 				<?php 
						foreach ($query as $row) {
					?>	

	 					<?php
	 						echo (
			 					'<div class="w3-quarter">
			 						<a href="#">
			 							<div class="w3-card w3-container w3-margin-bottom w3-round w3-green height-card" style="padding: 0px;">
			 							<div class="size-image">
			 								<img src="./image/produk1.png" alt="BELUM_ADA" class="position-image">
			 							</div>
			 							<div class="card">
											<div class="font-height container-text">
			 									<p style="margin: 0px;">
			 										<b>'.$row["nama_produk"].'</b> 
			 									</p>
			 								</div>
			 								<div style="color: red; font-size: 14px;">Rp. '.$row["harga"].'</div>
			 								<div style="font-size: 13px;">'.$row["provinsi"].'</div>
			 								<div style="font-size: 13px;">'.$row["kabupaten_kota"].'</div>
			 							</div>
			 						</div>
			 						</a>
			 					</div>'
	 						);
	 					?> 

	 				<?php 
	 					} 
	 				?>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
