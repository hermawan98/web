<ul class="nav">
	<?php 
		$sql= mysqli_query($koneksi, "SELECT * FROM tb_menu ORDER BY urutan");
		while($data=mysqli_fetch_assoc($sql)) {
	 ?>
		<li><a href="<?php echo $data['link']; ?>">
		<?php echo $data['judul']; ?>
		</a></li>
	<?php
	 }
	?>
</ul>