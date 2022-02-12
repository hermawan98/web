<?php 

$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$id' ");
$data = mysqli_fetch_assoc($sql);

 ?>

<h2>Edit Pengguna</h2>

<form method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><input type="text" name="level" value="<?php echo $data['level']; ?>"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><img src="img/<?php echo $data['foto']; ?>" width="100"> <br>
				<input type="file" name="foto"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="edit"></td>
		</tr>

	</table>
	
</form>

<?php 
if (isset($_POST['edit'])){

$username=$_POST['username'];
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$level=$_POST['level'];

$foto=$_FILES['foto']['name'];
$lokasi=$_FILES['foto']['tmp_name'];

$upload=move_uploaded_file($lokasi,"img/".$foto);

if(!empty($lokasi)){
              move_uploaded_file($lokasi,"img/".$foto);
              $sql= mysqli_query($koneksi,"UPDATE tb_user SET username='$username', nama='$nama', password='$pass', level='$level', foto='$foto' WHERE id_user='$id'" );
              if($sql){
              ?>
              <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?tampil=user";
              </script>
              <?php
              }

             }else{
              $sql= mysqli_query($koneksi,"UPDATE tb_user SET username='$username', nama='$nama', password='$pass', level='$level', foto='$foto' WHERE id_user='$id'" );
              if($sql){
              ?>
              <script type="text/javascript">
                alert ("Data Berhasil Disimpan");
                window.location.href="?tampil=user";
              </script>
              <?php
            }
          }
        }
        ?>
