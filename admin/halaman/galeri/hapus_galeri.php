<?php 
// Membuat script hapus data
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM tb_galeri WHERE id_galeri='$id' ");

	if ($sql){
    ?>
    <script type="text/javascript">
     alert ("Data Berhasil Dihapus");
     window.location.href="?tampil=galeri";

      </script>
      <?php
     }
 ?>