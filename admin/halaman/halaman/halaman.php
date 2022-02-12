<h2>Data Halaman</h2>
<a href="?tampil=tambah_halaman">Tambah Halaman</a><br><br>


<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Isi</th>
		<th>Aksi</th>
	</tr>
	<?php 

	$no =1;
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_halaman");
	While($data= mysqli_fetch_assoc($sql)) {

	 ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['judul']; ?></td>
		<td><?php echo $data['isi']; ?></td>
		<td>
			<a href="?tampil=edit_halaman&id= <?php echo $data['id_halaman'] ?> ">Edit</a>
			<a onclick="return confirm('Apakah anda yakin akan hapus data ini!')" href="?tampil=hapus_halaman&id= <?php echo $data['id_halaman'] ?> ">Hapus</a>
		</td>
	</tr>

<?php } ?>

</table>

