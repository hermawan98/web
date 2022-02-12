<?php
	
	$id=$_GET['id'];
	$sql = mysqli_query($koneksi,"SELECT * FROM tb_pesan WHERE id_pesan='$_GET[id]'");
	$data  	= mysqli_fetch_assoc($sql);
?>

<h2>Balas Pesan</h2>

<form method="post">
	
	<table>
		<tr> 
			<td>Kepada</td>	
			<td><input type="text" name="email" size="50" value="<?php echo $data['email']; ?>"></td> 
		</tr>
		
		<tr> 
			<td>subjek</td>	
			<td><input type="text" name="subjek" size="50" value="Re: <?php echo $data['subjek']; ?>"></td> 
		</tr>
		
		<tr> 
			<td>Pesan</td>			
			<td><textarea name="pesan" cols="85" rows="15">
				
				
		
		
		
---------------------------------------------------------------------------------
<?php echo $data['pesan']; ?>

				</textarea></td> 
		</tr>
		
		<tr> 
			<td></td>				
			<td><input type="submit" name="edit" value="Balas"></td> 
		</tr>
	</table>
</form>

<?php

mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],"From: pemilikwebsite@gmail.com");

?>