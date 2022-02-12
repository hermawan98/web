<h2>Tambah Menu</h2>

<form method="post">
	<table>
		
		<tr>
			<td>Judul Menu</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input type="text" name="link"></td>
		</tr>
		<tr>
			<td>Urutan</td>
			<td><input type="text" name="urutan"></td>
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
	$link=$_POST['link'];
	$urutan=$_POST['urutan'];

	$sql= mysqli_query($koneksi,"INSERT INTO tb_menu (judul, link, urutan )VALUES('$judul', '$link', '$urutan')");

	if($sql){
	?>
	<script type="text/javascript">
  	alert("Data Berhasil Ditambhakan");
  	window.location.href="?tampil=menu";
 	</script>
  <?php

	}
}


 ?>

 