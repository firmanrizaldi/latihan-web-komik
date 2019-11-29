<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="komik.css" />
    <title>komik</title>
</head>

<body>

<div class="container">
<form action="proses.php" method="POST">
  <div class="form_daftar">
    <div class="kepala">
        <h2 class="judul">DAFTAR</h2>
    </div>
    <div class="artikel">
    <div class="form-group">
      <label for="inputNama">Nama</label>
      <input type="text" class="form-control" required="required" id="inputNama" placeholder="Masukan Nama " name="nm">
    </div>
  <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" class="form-control" required="required" id="inputUsername" placeholder="Masukan Username" name="user">
  </div>
  <div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="email" class="form-control" required="required" id="inputEmail" placeholder="Masukan E-mail" name="email">
  </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" required="required" id="inputPassword" placeholder="Masukan Password" name="pass">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Saya ingin mendaftar
      </label>
    </div>
  </div>
    <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary">Daftar</button></div>
  <div class="col"><a href="login.php">Login</a></div>
    </div>
</div></div></form></div>
  
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>