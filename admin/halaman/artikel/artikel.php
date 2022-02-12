<h2>Data Artikel</h2>
<a href="?tampil=tambah_artikel">Tambah Artikel</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">

<tr>
	<th>No</th>
	<th>Judul Artikel</th>
	<th>Isi</th>
	<th>Gambar</th>
	<th>Tanggal</th>
	<th>Aksi</th>
</tr>
<?php 

	$no = 1;
	$sql = mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
	While($data = mysqli_fetch_assoc($sql)) {
	
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $data['judul']; ?></td>
	<td><?php echo $data['isi']; ?></td>
	<td><img src="img/<?php echo $data['gambar']; ?>" width="50"></td>
	<td><?php echo $data['tanggal']; ?></td>
	
	<td>
	<a href="?tampil=edit_artikel&id= <?php echo $data['id_artikel']; ?>">Edit</a>
	<a onclick="return confirm('Apakah anda yakin akan hapus data ini!')" href="?tampil=hapus_artikel&id= <?php echo $data['id_artikel']; ?>">Hapus</a>
	</td>
</tr>	
<?php } ?>

</table>