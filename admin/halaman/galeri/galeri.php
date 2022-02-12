<h2>Data Galeri</h2>
<a href="?tampil=tambah_galeri">Tambah Galeri</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">

<tr>
	<th>No</th>
	<th>Foto</th>
	<th>Judul Foto</th>
	<th>Tanggal</th>
	<th>Aksi</th>
</tr>
<?php 

	$no = 1;
	$sql = mysqli_query($koneksi,"SELECT * FROM tb_galeri");
	While($data = mysqli_fetch_assoc($sql)) {
	
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><img src="img/<?php echo $data['gambar']; ?>" width="50"></td>
	<td><?php echo $data['judul']; ?></td>
	<td><?php echo $data['tanggal']; ?></td>
	
	<td>
	<a href="?tampil=edit_galeri&id= <?php echo $data['id_galeri']; ?>">Edit</a>
	<a onclick="return confirm('Apakah anda yakin akan hapus data ini!')" href="?tampil=hapus_galeri&id= <?php echo $data['id_galeri']; ?>">Hapus</a>
	</td>
</tr>	
<?php } ?>

</table>
