<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>

<?php
require_once "./backend/koneksi.php";

$id = $_GET["id"];

$select = "select * from produk where id_produk = '$id' ";
$query = mysqli_query($koneksi, $select);

?>
	 		</div>
	 		<div class="right-detail">
	 			<div class="padding-detail">
	 				<center><h5>Detail Produk</h5></center>
	 				<hr class="garis-hr">
	 				<div class="group-detail">
	 					<?php 
							foreach ($query as $row) {
						?>
	 					<div class="group-form">
		 					<div class="w3-row row-detail">
		 						<div class="w3-half" id="image-detail">
		 							<img src="<?= $row['path_image'];?>" style="width: 300px; height: 300px; border-radius: 10px;">
		 						</div>
		 						<form method="POST" action="pembayaran.php">
		 						<div class="w3-half margin-half">
		 							<div class="font-title"><?php echo $row["nama_produk"]; ?></div>
		 							<div class="font-harga">Rp. <?php echo $row["harga"]; ?></div>
		 							<div>
		 								<div>
		 									<input type="hidden" name="penjual" value="<?= $row['username'] ?>" />
		 									<input type="hidden" name="id" value="<?= $row['id_produk'] ?>" />
		 									<input type="hidden" name="jumlah_stok" value="<?= $row['jmlh_produk'] ?>" />
		 									<input type="hidden" name="nama_produk" value="<?php echo $row["nama_produk"]; ?>" />
		 									<input type="hidden" name="harga" value="<?php echo $row["harga"]; ?>" />
			 								<select class="stok" name="stok" style="width: 200px;">
			 									<option value="1">1 Unit</option>
			 									<option value="2">2 Unit</option>
			 									<option value="3">3 Unit</option>
			 									<option value="4">4 Unit</option>
			 									<option value="5">5 Unit</option>
			 									<option value="6">6 Unit</option>
			 									<option value="7">7 Unit</option>
			 									<option value="8">8 Unit</option>
			 									<option value="9">9 Unit</option>
			 									<option value="10">10 Unit</option>
			 								</select>
		 								</div>
		 								<div class="stok" style="width: 200px;">
		 									STOK <?php echo $row["jmlh_produk"]; ?>
		 								</div>
		 							</div>
		 							
		 								<button type="submit" name="beli" class="beli-now" style="width: 200px;">Beli Sekarang</button>
		 						</div>
		 						</form>
		 					</div>

		 					<div class="detail-produk">
		 						<button class="button-detail">Detail Produk</button>
		 						<hr class="garis-hr">
		 						<div style="width: 100%; margin:0px; padding: 10px;">
		 							<?php echo nl2br($row["desc_produk"]); ?>
		 						</div>
		 					</div>
		 					
	 					</div>
	 				</div>
			 		<?php 
						} 
					?>
	 			</div>
	 		</div>

	 	</div>
	 </div>
</body>
</html>
