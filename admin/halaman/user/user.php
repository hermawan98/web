<h2>Data Pengguna</h2>
<a href="?tampil=tambah_user">Tambah Data</a> <br><br>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Level</th>
		<th>Foto</th>
		<th>Aksi</th>
	</tr>
	
 	<?php
	$no=1;
	$sql= mysqli_query($koneksi, "SELECT * FROM tb_user");
	while ($data= mysqli_fetch_assoc($sql)) {
	 ?>
	 <tr>
	 	<td><?php echo $no++; ?></td>
	 	<td><?php echo $data['username']; ?></td>
	 	<td><?php echo $data['nama']; ?></td>
	 	<td><?php echo $data['password']; ?></td>
	 	<td><?php echo $data['level']; ?></td>
	 	<td><img src="img/<?php echo $data['foto']; ?>" width="50"></td>
	 	<td>
	 		<a href="?tampil=edit_user&id=<?php echo $data['id_user']; ?>">Edit</a>
	 		<a onclick="return confirm('Apakah Anda Yakin Akan Mengahapus Data ini!')" href="?tampil=hapus_user&id=<?php echo $data['id_user']; ?>">Hapus</a>
	 	</td>
	 </tr>

<?php } ?>

</table>