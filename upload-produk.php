<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Upload Produk</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/daftar.php" style="margin: 0px 10px;">
	    			
	    			<input class="w3-input daftar-input" type="file" name="image" accept="image/*" required placeholder="Upload Image">
					<input class="w3-input daftar-input" type="text" name="username" required placeholder="Judul Produk"> 
					<input class="w3-input daftar-input" type="text" name="name" required placeholder="Harga Produk"> 
					<input class="w3-input daftar-input" type="text" name="no_hp" required placeholder="Banyak Produk">
					<div class="padding-select">
						<select class="style-select" size="5">
							<option selected>-- Pilih Provinsi Anda --</option>
						    <option>Aceh</option>
						    <option>Bali</option>
						    <option>Banten</option>
						    <option>Bengkulu</option>
						    <option>Gorontalo</option>
						    <option>Jakarta</option>
						    <option>Jambi</option>
						    <option>Jawa Barat</option>
						    <option>Jawa Tengah
						    <option>Jawa Timur</option>
						    <option>Kalimantan Barat</option>
						    <option>Kalimantan Selatan</option>
						    <option>Kalimantan Tengah</option>
						    <option>Kalimantan Timur</option>
						    <option>Kalimantan Utara</option>
						    <option>Kepulauan Bangka Belitung</option>
						    <option>Kepulauan Riau</option>
						    <option>Lampung</option>
						    <option>Maluku </option>
						    <option>Maluku Utara</option>
						    <option>Nusa Tenggara Timur</option>
						    <option>Nusa Tenggara Barat</option>
						    <option>Papua</option>
						    <option>Papua Barat</option>
						    <option>Riau</option>
						    <option>Sulawesi Barat</option>
						    <option>Sulawesi Selatan</option>
						    <option>Sulawesi Tengah</option>
						    <option>Sulawesi Tenggara</option>
						    <option>Sulawesi Utara</option>
						    <option>Sumatera Barat</option>
						    <option>Sumatera Selatan</option>
						    <option>Sumatera Utara</option>
						    <option>Yogyakarta</option>
						</select>
					</div>
					<div class="padding-select">
						<input class="w3-input daftar-input" type="text" name="kota/kabupaten" required placeholder="Kota/Kabupaten"> 
					</div>
					
					<label>Deskripsi Barang Anda</label>
					<div style="padding: 10px; margin-bottom: 20px;">
						<!-- deskripsi produk -->
						<textarea name="desc_produk" class="desc-produk"> 
								
						</textarea>
					</div>

					<div class="w3-center" style="padding: 20px 0px;"> 
						<button type="submit" name="login" class="w3-btn w3-green w3-round" style=" margin-right: 50px;">Upload</button>
					<a href="index.php" class="w3-btn w3-green w3-round">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>