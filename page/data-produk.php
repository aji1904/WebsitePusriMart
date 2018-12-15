
<div class="w3-row-padding" style="margin: 20px 0px;">
<?php 
foreach ($query as $row) {
?>
<div class="w3-quarter">
	<a href='detail-produk.php?id=<?= $row["id_produk"] ?>&?p=<?= $row["username"] ?>'>
		<div class="w3-card w3-container w3-margin-bottom w3-round w3-green height-card" style="padding: 0px;">
		<div class="size-image">
			<img src="<?= $row["path_image"]?>" alt="BELUM_ADA" class="position-image">
		</div>
		<div class="card">
		<div class="font-height container-text">
				<p style="margin: 0px;">
					<b><?php echo $row["nama_produk"] ?></b> 
				</p>
			</div>
			<div style="color: red; font-size: 14px;">Rp. <?php echo $row["harga"] ?></div>
			<div style="font-size: 13px;"><?php echo $row["provinsi"] ?></div>
			<div style="font-size: 13px;"><?php echo $row["kabupaten_kota"] ?></div>
		</div>
	</div>
	</a>
</div>
<?php 
	} 
?>
</div>