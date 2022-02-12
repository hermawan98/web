<?php 
// Membuat script hapus data
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM tb_menu WHERE id_menu='$id' ");

	if ($sql){
    ?>
    <script type="text/javascript">
     alert ("Data Berhasil Dihapus");
     window.location.href="?tampil=menu";

      </script>
      <?php
     }
 ?>