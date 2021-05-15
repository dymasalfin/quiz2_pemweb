<?php
session_start();
if(isset($_SESSION['username'])){
	header("location: welcome.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>HALAMAN LOGIN</title>
  </head>
  <center><body style="background-color:#FDF5E6;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<h1>LOGIN</h1>
	
	<center><div style="color: red;margin-bottom: 15px;">
		<?php
		if(isset($_COOKIE["message"])){
			echo $_COOKIE["message"];
		}
		?>
	</div></center>
	
	<form method="post" action="Login.php">
		<div class="form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Username</label><br>
			<div class="col-md-2 col-sm-2 ">
				<input type="text" name="username" class="form-control" placeholder="Username"><br><br>
			</div>
		</div>
		<div class="form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Password</label><br>
			<div class="col-md-2 col-sm-2 ">
				<input type="password" name="password" class="form-control" placeholder="Password"><br><br>
			</div>
		</div>
		
		<button type="submit"class="btn btn-outline-success">Login</button>
		<button type="submit"class="btn btn-outline-primary"><a href="form-pendaftaran.php">registrasi</a></button>
	</form>
  </body></center>
</html>