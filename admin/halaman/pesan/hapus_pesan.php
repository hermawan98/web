<?php 

	$id=$_GET['$id'];
	$sql= mysqli_query($koneksi;"DELETE FROM tb_pesan WHERE id_pesan='$id' ");

	if($sql) {
		?>

		<script type="text/javascript">
			alert("Pesan Berhasil Dihapus!");
			window.location.href="?tampil=pesan";
		</script>
		<?php
	}

 ?>