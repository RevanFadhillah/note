<?php
require_once('database.php');
session_start();

if (isset($_POST['masuk'])) {
  if (cek_login($_POST['username'], $_POST['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    if ($_SESSION['role'] == "admin"){
      header("location:home.php");
  } else {
    header("location:Member.php");
  }
}else {
    header("location:Login.php?msg=gagal");
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login Inventory</title>
  </head>
  <body>
 <br>
 <br>
 <br><br>
<div class="container">
<div class="row">
    <div class="col-md-4">
</div>
<div class="col-md-4">
<div class="card">
  <div class="card-header">
  <br>
  <h2>NOTES LOGIN</h2>
  <br>
  </div>
<div class="card-body">
<form action="" method="POST">
  <div class="form-group">
  <label>Username</label>
    <input type="username" class="form-control" name="username" placeholder="username">
  </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" class="form-control" name="password" placeholder="password">
</div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="dropdownCheck">
    <label class="form-check-label" for="dropdownCheck">Remember Me</label>
  </div>
</div>
<button type="submit" class="btn btn-primary" name="masuk">Submit</button>
</form>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>