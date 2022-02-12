<?php 
	$sql= mysqli_query($koneksi,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
	while($data= mysqli_fetch_assoc($sql)){

		$isi= substr($data ['isi'], 0, 800);
		$isi= substr($data ['isi'], 0, strrpos($isi, ""));
	
 ?>
 <div class="artikel">
 	<h2 class="judul"><?php echo $data['judul']; ?></h2>
 	<p>
 		<?php if($data['gambar'] !="") ?>
 		<img src="admin/img/<?php echo $data['gambar']; ?>"
 		class="gambar-artikel" width="200">

 		<?php echo $isi; ?>
 		<a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>">
 			Selengkapnya
 		</a>
 	</p>
 </div>
 <?php 
}
  ?>

