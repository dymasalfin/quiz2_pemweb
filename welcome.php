<?php
session_start();
if( ! isset($_SESSION['username'])){
	header("location: index.php");
}
?>

<html>
<head>
	<title>HOME</title>
</head>
<center><body>
	<h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
	<h4>anda berhasil masuk ke tampilan home quiz2 dari M.Dymas Alfin Zainur Roziqin(192410102089)</h4>
	
	<a href="logout.php">Logout</a>
</body></center>
</html>
