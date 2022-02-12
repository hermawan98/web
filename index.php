<!DOCTYPE html>
<?php 
	include "koneksi.php";
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title>PAMSIMAS PROVINSI JAWA BARAT</title>
	<link rel="stylesheet"  href="custom.css">
</head>
<body>
<div class="container">
<div class="header"></div>
<!-- membuat menu -->
<div class="menu">
	<?php include("menu.php"); ?>
</div>


<!-- Membuat isi -->
<div class="content">
	<div class="kiri">
		<?php include "konten/konten.php" ?>
	</div>
	<div class="kanan">
		
	</div>
</div>
<div class="footer">
	<p>Copyrigt &copy; Hari Hermawan 2022</p>
</div>
</div>
</body>
</html>