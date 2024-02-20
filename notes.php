<?php
require_once('database.php');
$data=tampildata('notes');
$nomor=0;
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <?php
      session_start();
      if($_SESSION['status'] != "login") {
        header("location:Login.php");
      }
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item Active">
        <a class="nav-link" href="notes.php">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">user</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">API</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a role="button" href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a> 
     </form>
  </div>
</nav>
</div>
<div class="container">
  <center><h1>DAFTAR CATATAN</h1></center>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Created at</th>
      <th scope="col">Note</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) : ?>
      <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['id']; ?> </td>
      <td><?php echo $item['create_at']; ?> </td>
      <td><?php echo $item['note']; ?> </td>
      <td><?php echo "<a href='edit.php?id=$item[id]'>EDIT</a> | <a href='javascript:hapusData(" . $item['id'] . ")'> DELETE </a>"; ?> </td>
    </tr>
<?php endforeach ?>
  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
      <script language="JavaScript" type="text/javascript">
        function hapusData(id){
          if (confirm( "Apakah Anda Yakin akan Menghapus data ini?")){
            window.location.href = 'delete.php?id=' + id;
          }
        }
    </script>
  </body>
</html>