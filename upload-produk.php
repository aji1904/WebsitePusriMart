<?php include './page/header.php'; ?> 
<body>
 	<div class="w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Upload Produk</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/upload.php" style="margin: 0px 10px;" enctype="multipart/form-data" >
	    			
	    			<input class="w3-input daftar-input" type="file" name="foto-produk"  accept="image/*" multiple required placeholder="Upload Image">
					<input class="w3-input daftar-input" type="text" name="nama_produk" required placeholder="Judul Produk"> 
					<input class="w3-input daftar-input" type="text" name="harga" required placeholder="Harga Produk"> 
					<input class="w3-input daftar-input" type="text" name="jmlh_produk" required placeholder="Banyak Produk">
					<div class="padding-select">
						<select class="style-select" name="provinsi" style="height: 35px;">
							<option selected>-- Pilih Provinsi Anda --</option>
						    <option value="Aceh">Aceh</option>
						    <option value="Bali">Bali</option>
						    <option value="Banten">Banten</option>
						    <option value="Bengkulu">Bengkulu</option>
						    <option value="Gorontalo">Gorontalo</option>
						    <option value="Jakarta">Jakarta</option>
						    <option value="Jambi">Jambi</option>
						    <option value="Jawa Barat">Jawa Barat</option>
						    <option value="Jawa Tengah">Jawa Tengah
						    <option value="Jawa Timur">Jawa Timur</option>
						    <option value="Kalimantan Barat">Kalimantan Barat</option>
						    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
						    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
						    <option value="Kalimantan Timur">Kalimantan Timur</option>
						    <option value="Kalimantan Utara">Kalimantan Utara</option>
						    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
						    <option value="Kepulauan Riau">Kepulauan Riau</option>
						    <option value="Lampung">Lampung</option>
						    <option value="Maluku">Maluku </option>
						    <option value="Maluku Utara">Maluku Utara</option>
						    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
						    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
						    <option value="Papua">Papua</option>
						    <option value="Papua Barat">Papua Barat</option>
						    <option value="Riau">Riau</option>
						    <option value="Sulawesi Barat">Sulawesi Barat</option>
						    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
						    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
						    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
						    <option value="Sulawesi Utara">Sulawesi Utara</option>
						    <option value="Sumatera Barat">Sumatera Barat</option>
						    <option value="Sumatera Selatan">Sumatera Selatan</option>
						    <option value="Sumatera Utara">Sumatera Utara</option>
						    <option value="Yogyakarta">Yogyakarta</option>
						</select>
					</div>
					<div class="padding-select">
						<input class="w3-input daftar-input" type="text" name="kabupaten_kota" required placeholder="Kota/Kabupaten" style="text-transform: uppercase;"> 
					</div>
					<div class="padding-select">
						<select class="style-select" style="height: 35px;" name="kategori">
							<option selected>-- Pilih Kategori Produk Anda --</option>
						    <option value="retail">Produk Retail</option>
						    <option value="inovasi">Produk Inovasi</option>
						    <option value="urea">Urea</option>
						    <option value="amonia">Amonia</option>
						    <option value="npk-fusion">NPK Fusion</option>
						</select>
					</div>
					<div class="padding-select">
						<select class="style-select" style="height: 35px;" name="jenis_produk">
							<option selected>-- Pilih Jenis Produk Anda --</option>
						    <option value="urea-retail">UREA Retail (Produk Retail)</option>
						    <option value="npk-retail">NPK Retail (Produk Retail)</option>
						    <option value="benih-padi">Benih Padi PUSRI SEED (Produk Inovasi)</option>
						    <option value="benih-cabai">Benih Cabai PUSRI SEED (Produk Inovasi)</option>
						    <option value="benih-jagung">Benih Jagung Hibrida PUSRI SEED (Produk Inovasi)</option>
						    <option value="dekomposer">Dekomposer Cair SRIDEK (Produk Inovasi)</option>
						    <option value="pupuk-bfatalik">Pupuk Cair B-FITALIK (Produk Inovasi)</option>
						    <option value="beropestisida">Beopestisida B-VERIN (Produk Inovasi)</option>
						    <option value="pupuk-bioripah">Pupuk Hayati BIORIPAH (Produk Inovasi)</option>
						    <option value="pusri-organikcair">PUSRI Organik Cair (Produk Inovasi)</option>
						    <option value="pusri-hydro">PUSRI Hydro (Produk Inovasi)</option>
						    <option value="nutremag">Nutremag (Produk Inovasi)</option>
						    <option value="urea">UREA (Urea)</option>
						    <option value="amonia">Amonia (Amonia)</option>
						    <option value="npk-fusion">NPK-Fusion (NPK Fusion)</option>
						</select>
					</div>
					
					<label>Deskripsi Barang Anda</label>
					<div style="padding: 10px; margin-bottom: 20px;">
						<!-- deskripsi produk -->
						<textarea name="desc_produk" class="desc-produk"> 
								
						</textarea>
					</div>

					<div class="w3-center" style="padding: 20px 0px;"> 
						<button type="submit" name="upload" class="w3-btn w3-green w3-round" style=" margin-right: 50px;">Upload</button>
					<a href="profile_penjual.php" class="w3-btn w3-green w3-round">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>
