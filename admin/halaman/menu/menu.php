<h2>Data Menu</h2>
<a href="?tampil=tambah">Tambah Menu</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">

<tr>
	<th>No</th>
	<th>Judul</th>
	<th>Link</th>
	<th>Urutan</th>
	<th>Aksi</th>
</tr>
<?php 

	$no = 1;
	$sql = mysqli_query($koneksi,"SELECT * FROM tb_menu");
	While($data = mysqli_fetch_assoc($sql)) {
?>

<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $data['judul']; ?></td>
	<td><?php echo $data['link']; ?></td>
	<td><?php echo $data['urutan']; ?></td>

	<td>
	<a href="?tampil=edit&id= <?php echo $data['id_menu']; ?>">Edit</a>
	<a onclick="return confirm('Apakah anda yakin akan hapus data ini!')" href="?tampil=hapus&id= <?php echo $data['id_menu']; ?>">Hapus</a>
	</td>
</tr>	
<?php } ?>

</table>