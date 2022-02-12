
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "../koneksi.php";
session_start();
if($_SESSION['username'] || $_SESSION['password']){
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Membuat Layout Website yg terdiri dari header, menu, content dan footer -->
<div class="container">
<div class="header"></div>
<div class="menu">
	<!-- Menambahkan menu  -->
	<ul class="left">
		<li><a href="admin.php">Beranda</a></li>
		<li><a href="?tampil=menu">Menu</a></li>
		<li><a href="?tampil=halaman">Halaman</a></li>
		<li><a href="?tampil=artikel">Artikel</a></li>
		<li><a href="?tampil=galeri">Galeri</a></li>
		<li><a href="?tampil=pesan">Pesan</a></li>
	</ul>

	<ul class="right">
		<li><a href="">Preview</a></li>
		<li><a href="?tampil=user">Profil</a></li>
		<li><a href="?tampil=keluar">Keluar</a></li>
	</ul>
	
	<!-- Membuat menu tampil halaman -->

</div>
<div class="content">
	<?php 
	// membuat aksi buat menu tampil 
    if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");
		// membuat aksi  menu tampil 
	elseif( $tampil == "menu" )					include("halaman/menu/menu.php");
	elseif( $tampil == "tambah" )			include("halaman/menu/tambah.php");
	elseif( $tampil == "edit" )			include("halaman/menu/edit.php");
	elseif( $tampil == "hapus" )			include("halaman/menu/hapus.php");
		// membuat aksi  halaman tampil 
	elseif( $tampil == "halaman" )					include("halaman/halaman/halaman.php");
	elseif( $tampil == "tambah_halaman" )			include("halaman/halaman/tambah_halaman.php");
	elseif( $tampil == "edit_halaman" )			include("halaman/halaman/edit_halaman.php");
	elseif( $tampil == "hapus_halaman" )			include("halaman/halaman/hapus_halaman.php");
	// membuat aksi  artikel tampil 
	elseif( $tampil == "artikel" )					include("halaman/artikel/artikel.php");
	elseif( $tampil == "tambah_artikel" )			include("halaman/artikel/tambah_artikel.php");
	elseif( $tampil == "edit_artikel" )			include("halaman/artikel/edit_artikel.php");
	elseif( $tampil == "hapus_artikel" )			include("halaman/artikel/hapus_artikel.php");
	// membuat aksi  galeri tampil 
	elseif( $tampil == "galeri" )					include("halaman/galeri/galeri.php");
	elseif( $tampil == "tambah_galeri" )			include("halaman/galeri/tambah_galeri.php");
	elseif( $tampil == "edit_galeri" )			include("halaman/galeri/edit_galeri.php");
	elseif( $tampil == "hapus_galeri" )			include("halaman/galeri/hapus_galeri.php");
	// membuat aksi  pesan tampil 
	elseif( $tampil == "pesan" )					include("halaman/pesan/pesan.php");
	elseif( $tampil == "balas_pesan" )					include("halaman/pesan/balas_pesan.php");
	elseif( $tampil == "hapus_pesan" )			include("halaman/galeri/hapus_pesan.php");
	// membuat aksi  user tampil 
	elseif( $tampil == "user" )					include("halaman/user/user.php");
	elseif( $tampil == "tambah_user" )			include("halaman/user/tambah_user.php");
	elseif( $tampil == "edit_user" )			include("halaman/user/edit_user.php");
	elseif( $tampil == "hapus_user" )			include("halaman/user/hapus_user.php");
	else echo "Konten tidak ada!";
	 ?>
</div>
<div class="footer">
	<p>Copyright &copy; Hari Hermawan 2021</p>
</div>
</div>
</body>
</html>

<?php 
}else{
  header ("location:login.php");
}
?>
