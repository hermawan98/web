<?php 
	
	$sql= mysqli_query($koneksi, "SELECT * FROM tb_artikel Where id_artikel= ".$_GET['id']."");
	$data=mysqli_fetch_assoc($sql);
	$isi= $data['isi'];
 ?>
 <div class="artikel">
 	<h2 class="judul">
 		<?php echo $data['judul']; ?>
 	</h2>
 	<p>
 		<?php if($data['gambar']!="") ?> 
 		<img src="admin/img/<?php echo $data['gambar']; ?>" 
 		class="gambar-artikel" width="350">

 		<?php echo $isi; ?>
 	</p>

 </div>