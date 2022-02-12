<h2>Data Pesan</h2>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Subjek</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>

		<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"SELECT * FROM tb_pesan");
			While($data = mysqli_fetch_assoc($sql)) {
	
		 ?>
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['email']; ?> </td>
		<td> <a href="?tampil=balas_pesan&id=<?php echo $data['id_pesan']; ?>"> <?php echo $data['subjek']; ?> </a></td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=pesan_hapus&id=<?php echo $data['id_pesan']; ?>"> Hapus </a>
		</td>
	</tr>
	<?php } ?>
</table>