<?php
require_once('database.php');
$data = editdata('notes', $_GET['id']);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notes.php">Notes</a>
</li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">user</a>
      </li>
      <li class="nav-item Active">
        <a class="nav-link" href="edit.php">edit</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>
<div class="container">
<ul>
    <h2>Edit Notes</h2>
    <?php while ($note=mysqli_fetch_array($data)): ?>
    <form action="update.php" method="post">
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo "$note[id]"; ?>">
    <label for="notes">Notes</label>
    <textarea class="form-control" id="exapleFormControlTextarea1" rows="3" name="notes"><?php echo "$note[note]"; ?></textarea>
    <input type="submit" value= "Update">
  </div>
    </form>
    <?php endwhile ;?>
</ul>
    </div>
</body>
</html>