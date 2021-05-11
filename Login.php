<?php
session_start();

include "koneksi.php";

$username = mysqli_real_escape_string($connect, $_POST['username']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$password = md5($password); // Kita enkripsi (encrypt) password dengan md5

$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($sql);

if( ! empty($data)){ 
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
	
	setcookie("message","delete",time()-1);
	
	header("location: welcome.php");
}else{
	setcookie("message", "Maaf, Username atau Password yang anda masukan salah", time()+3600);
	
	header("location: index.php");
}
?>