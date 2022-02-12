
<form method="post">
	<table>
	<tr>
		<td>Judul Halaman</td>
		<td><input type="text" name="judul" size="50"></td>
	</tr>	

		<tr>
			<td>Isi Halaman</td>
			<td><textarea name="isi" cols="80" rows="15"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="tambah"></td>
		</tr>
	</table>
</form>

<?php 

if(isset($_POST['tambah'])){

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$sql= mysqli_query($koneksi,"INSERT INTO tb_halaman (judul,isi)VALUES('$judul', '$isi')");

	if($sql){
		?>
		<script type="text/javascript">
			alert("Data Berhasil ditambahkan");
			window.location.href="?tampil=halaman";
		</script>
		<?php
	}
}

 ?>

