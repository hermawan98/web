<?php 
// Membuat script hapus data
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM tb_artikel WHERE id_artikel='$id' ");

	if ($sql){
    ?>
    <script type="text/javascript">
     alert ("Data Berhasil Dihapus");
     window.location.href="?tampil=artikel";

      </script>
      <?php
     }
 ?>