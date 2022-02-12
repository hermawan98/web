<?php 

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_halaman WHERE id_halaman='$id' ");
$data = mysqli_fetch_assoc($sql);

 ?>

<form method="post">
	<table>
	<tr>
		<td>Judul Halaman</td>
		<td><input type="text" name="judul"  value= "<?php echo $data['judul']; ?>" size="50"></td>
	</tr>	

		<tr>
			<td>Isi Halaman</td>
			<td><textarea name="isi" cols="80" rows="15"> <?php echo $data['isi']; ?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>
	</table>
</form>

<?php 

if(isset($_POST['edit'])){

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	$sql= mysqli_query($koneksi,"UPDATE tb_halaman SET judul='$judul', isi='$isi' WHERE id_halaman='$id' ");

	if($sql){
		?>
		<script type="text/javascript">
			alert("Data Berhasil diedit");
			window.location.href="?tampil=halaman";
		</script>
		<?php
	}
}

 ?>

