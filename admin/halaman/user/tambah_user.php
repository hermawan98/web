<h2>Tambah Pengguna</h2>

<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="tambah"></td>
		</tr>

	</table>
	
</form>

<?php 
if (isset($_POST['tambah'])){

$username=$_POST['username'];
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$level=$_POST['level'];

$foto=$_FILES['foto']['name'];
$lokasi=$_FILES['foto']['tmp_name'];

$upload=move_uploaded_file($lokasi,"img/".$foto);

if ($upload){

	$sql=mysqli_query($koneksi,"INSERT INTO tb_user(username, nama, password, level, foto) VALUES('$username', '$nama', '$pass', '$level', '$foto')");
if($sql){
	?>
		<script type="text/javascript">
			alert("Data Berhasil ditambahkan");
			window.location.href="?tampil=user";
		</script>
  <?php

	}
  }
}

 ?>
