<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
		<div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>