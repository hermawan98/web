<?php 

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_menu WHERE id_menu='$id' ");
$data = mysqli_fetch_assoc($sql);
 ?>

<h2>Menu Edit</h2>

<form method="post">
	
	<table>	
		<tr>
			<td>Judul Menu</td>
			<td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input type="text" name="link" value="<?php echo $data['link']; ?>"></td>
		</tr>
		<tr>
			<td>Urutan</td>
			<td><input type="text" name="urutan" value="<?php echo $data['urutan']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>

	</table>
	
</form>

<?php 

if(isset($_POST['edit'])){

	$judul=$_POST['judul'];
	$link=$_POST['link'];
	$urutan=$_POST['urutan'];

	$sql= mysqli_query($koneksi, "UPDATE tb_menu SET judul='$judul', link='$link', urutan='$urutan' WHERE id_menu='$id' ");

	if($sql){
	?>
	<script type="text/javascript">
  	alert("Data Berhasil Diedit");
  	window.location.href="?tampil=menu";
 	</script>
  <?php

	}
}


 ?>