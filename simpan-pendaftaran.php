<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$password=md5($_POST["password"]);
$nama=$_POST["nama"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (username,password,nama) values
		('$username','$password','$nama')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($connect,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo '<script>alert("pendaftaran berhasil."); document.location="index.php";</script>';
  }
else {
	echo '<div class="alert alert-warning">pendaftaran gagal.</div>';
}  

?>