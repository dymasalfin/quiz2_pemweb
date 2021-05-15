<?php
session_start();
if(isset($_SESSION['username'])){
	header("location: welcome.php");
}
?>

<html>
<head>
	<title>HALAMAN LOGIN</title>
</head>
<center><body>
	<h1>LOGIN</h1>
	
	<center><div style="color: red;margin-bottom: 15px;">
		<?php
		if(isset($_COOKIE["message"])){
			echo $_COOKIE["message"];
		}
		?>
	</div></center>
	
	<form method="post" action="Login.php">
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Username"><br><br>
		
		<label>Password</label><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		
		<button type="submit">Login</button>
		<button type="submit"><a href="form-pendaftaran.php">registrasi</a></button>
	</form>
</body></center>
</html>
