<?php session_start();?>
<?php include './page/header.php'; ?>

<?php
require_once "./backend/koneksi.php";
$Susername = $_SESSION['username'];

$select = "select * from user where username = '$Susername' ";
$query = mysqli_query($koneksi, $select);
$numrows = mysqli_num_rows($query);
if ($numrows == 1) {
	foreach ($query as $row) { ?>
		<div>Username Anda = <?php echo $row['username']; ?></div>
		<div>Nama Anda = <?php echo $row['name']; ?></div>
		<div>Nama Anda = <?php echo $row['email']; ?></div>
		<div>Nama Anda = <?php echo $row['lahir']; ?></div>
		<div>Nama Anda = <?php echo $row['no_hp']; ?></div>
		<div>Nama Anda = <?php echo $row['gender']; ?></div>

		<a href="">Edit</a>
		<a href="">Kembali</a>
<?php 
	}
}
?>
</body>
</html>
