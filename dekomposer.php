<?php session_start();?>
<?php include './page/header.php'; ?>
<?php include './page/navbar.php'; ?>
<?php include './page/left.php'; ?>

<?php
require_once "./backend/koneksi.php";

$select = "select * from produk where jenis_produk = 'dekomposer' ";
$query = mysqli_query($koneksi, $select);
?>

	 		</div>
	 		<div class="right">
	 			<div>
	 				Produk Inovasi
	 				<hr class="garis-hr">
	 				<?php include './page/data-produk.php'; ?>
	 				
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
