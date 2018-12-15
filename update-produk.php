<?php 
session_start();
include './page/header.php';
$Susername = $_SESSION['user_penjual'];
if (!isset($Susername)) {
	header("location: login_penjual.php");
	die();
}
require_once "./backend/koneksi.php";
$id = $_GET['id'];
$select = "select * from produk where id_produk = '$id' ";
$query = mysqli_query($koneksi, $select);
$numrows = mysqli_num_rows($query);

if ($numrows == 1) {
	foreach ($query as $row) {

?>
<body>
 	<div class="w3-border card-daftar" >

	
    <div style="padding-top: 20px;">
    	<center><font size="5">Update Produk</font></center>
    </div>	
	    <div>	
	    	<form class="w3-container" method="post" action="/WebsitePusriMart/backend/update.php" style="margin: 0px 10px;" enctype="multipart/form-data">
	    			<input type="hidden" name="id" value="<?= $id?>">
					<input class="w3-input daftar-input" type="text" name="judul" value="<?= $row['nama_produk']?>" required placeholder="Judul Produk"> 
					<input class="w3-input daftar-input" type="text" name="harga" value="<?= $row['harga']?>" required placeholder="Harga Produk"> 
					<input class="w3-input daftar-input" type="text" name="banyak" value="<?= $row['jmlh_produk']?>" required placeholder="Banyak Produk">
				
					<label>Deskripsi Barang Anda</label>
					<div style="padding: 10px; margin-bottom: 20px;">
						<!-- deskripsi produk -->
						<textarea name="desc_produk" class="desc-produk" ><?php echo $row['desc_produk']; ?>
						</textarea>
					</div>

					<div class="w3-center" style="padding: 20px 0px;"> 
						<button type="submit" name="update" class="w3-btn w3-green w3-round" style=" margin-right: 50px;">Update</button>
					<a href="profile_penjual.php" class="w3-btn w3-green w3-round">
					 Batal
					</a>
				</div>
			</form>
			</div> 
	    </div>
</body>
</html>
<?php 
	} 
} else {
	echo "<center>Anda Belum Ada Produk</center>";
}

?>