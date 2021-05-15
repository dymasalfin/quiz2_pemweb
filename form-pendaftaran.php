<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <center><div class="container">
    <h2>Pendaftaran</h2>
    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <div class="col-md-4 col-sm-4 ">
              <input type="text" name="username" class="form-control" placeholder="Masukan Username" required/>
            </div>
        </div>
		    <div class="form-group">
            <label>Password:</label>
            <div class="col-md-4 col-sm-4 ">
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required/>
            </div>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <div class="col-md-4 col-sm-4 ">
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Submit</button>

    </form>
</div></center>
  </body>
</html>