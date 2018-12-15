<?php include './page/header.php'; ?> 

<body>
	<div>
		<form method="POST" action="./backend/form-beli.php">
			<input type="hidden" name="nama_produk" value="<?= $_GET['nama_produk']?>">
			<input type="hidden" name="stok" value="<?= $_GET['stok']?>">
			<input type="hidden" name="jmlh" value="<?= $_GET['jmlh']?>">
			<input type="hidden" name="id" value="<?= $_GET['id']?>">
			<input type="hidden" name="beli" value="<?= $_GET['beli']?>">
			<div style="width: 40%; height: auto; margin: 30px auto; border-radius: 5px;padding: 20px 30px; margin-top: 20px;  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);" >
				<div>
					<center><h4>Pembelian</h4></center><br>
					<label>Nama penerima</label>
					<input type="text" name="nama" class="w3-input daftar-input">
				</div>
				<div>
					<label>Nomor HP</label>
					<input type="text" name="hp" class="w3-input daftar-input">
				</div>
				<div>
					<label>Kota Atau Kecamatan</label>
					<input type="text" name="kota_kecamatan" class="w3-input daftar-input">
				</div>
				<div>
					<label>Kode POS</label>
					<input type="text" name="pos" class="w3-input daftar-input">
				</div>
				<div>
					<label>Alamat Anda</label>
					<input type="text" name="alamat" class="w3-input daftar-input">
				</div>
				<div class="w3-center">
					<button type="submit" name="bayar" class="beli-now">Bayar</button>
					<a href="javascript:history.back()" class="beli-now" style="margin-left: 40px;">Batal</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
