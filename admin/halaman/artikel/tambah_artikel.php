<h2>Tambah Artikel</h2>

<form method="post" enctype="multipart/form-data">
	<table>
		
		<tr>
			<td>Judul Artikel</td>
			<td><input type="text" name="judul" size="50"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td>Isi Artikel</td>
			<td><textarea name="isi" cols="80" rows="15"></textarea></td>
		</tr>

		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="tambah"></td>
		</tr>

	</table>
	
</form>

<?php 

if(isset($_POST['tambah'])){

	$judul=$_POST['judul'];
	$isi=addslashes($_POST['isi']);
	$tgl= $_POST['tanggal'];

	$gambar =$_FILES['gambar']['name'];
    $lokasi=$_FILES['gambar']['tmp_name'];
   

    $upload= move_uploaded_file($lokasi,"img/".$gambar);
	
	if($upload){
	$sql= mysqli_query($koneksi,"INSERT INTO tb_artikel (judul, isi, gambar, tanggal )VALUES('$judul', '$isi', '$gambar', '$tgl')");

	if($sql){
	?>
		<script type="text/javascript">
			alert("Data Berhasil ditambahkan");
			window.location.href="?tampil=artikel";
		</script>
  <?php

	}
  }
}

 ?>

 