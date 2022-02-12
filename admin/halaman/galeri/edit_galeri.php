
<?php 

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_galeri WHERE id_galeri='$id' ");
$data = mysqli_fetch_assoc($sql);

 ?>


<h2>Edit Galeri</h2>

<form method="post" enctype="multipart/form-data">
	<table>
		
		<tr>
			<td>Judul Galeri</td>
			<td><input type="text" name="judul" size="50" value="<?php echo $data['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><img src="img/<?php echo $data['gambar']; ?>" width="100"> <br>
			<input type="file" name="gambar"></td>
		</tr>
		
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>

	</table>
	
</form>

<?php 

if(isset($_POST['edit'])){

	$judul=$_POST['judul'];
	$tgl= $_POST['tanggal'];

	$gambar =$_FILES['gambar']['name'];
    $lokasi=$_FILES['gambar']['tmp_name'];
   

    $upload= move_uploaded_file($lokasi,"img/".$gambar);
	
	if(!empty($lokasi)){
              move_uploaded_file($lokasi,"img/".$gambar);
              $sql= mysqli_query($koneksi,"UPDATE tb_galeri SET judul='$judul', gambar='$gambar', tanggal='$tgl' WHERE id_galeri='$id'" );
              if($sql){
              ?>
              <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?tampil=galeri";
              </script>
              <?php
              }

             }else{
              $sql= mysqli_query($koneksi,"UPDATE tb_artikel SET judul='$judul', gambar='$gambar', tanggal='$tgl' WHERE id_galeri='$id'" );
              if($sql){
              ?>
              <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?tampil=artikel";
              </script>
              <?php
            }
          }
        }
        ?>

 