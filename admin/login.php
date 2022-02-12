<?php


session_start();
include "../koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Administrator</title>
	<link rel="stylesheet"  href="css/login.css">
</head>
<body>
	<div class="container">
		<h3>Login Administrator</h3>
<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" autofocus></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
</form>
	</div>

</body>
</html>

<?php

    if (isset($_POST['login'])){
      
      $username=$_POST['username'];
      $password=md5($_POST['password']);

      // untuk melakukan pengecekan username dan password
      $sql=$koneksi->query("select * from tb_user where username='$username' and password='$password' ");
      $data=$sql->fetch_assoc();

      $ketemu=$sql->num_rows;
      if ($ketemu >= 1) {
      
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      header("location:admin.php");
        }else{
      ?>
      <script type="text/javascript">
        alert("Login gagal username dan password salah...silahkan ulangi");
      </script>
      <?php
    }
  }

?>