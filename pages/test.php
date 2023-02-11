<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h2>Test page</h2>
  <?php
session_start();

if (isset($_SESSION['test'])) {
  echo $_SESSION['test'] . '</br>';
}

if (isset($_SESSION['country'])) {
  echo $_SESSION['country'] . '</br>';
}
?>
<form class="mt-4" action="" method="post">
  <div class="mb-3">
  <label for="name" class="form-label text-primary">Name</label>
  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
</div>
<div class="mb-3">
  <label for="surname" class="form-label text-primary">Surname</label>
  <input type="text" class="form-control" id="surname" placeholder="Enter surname" name="surname">
</div>
<div class="mb-3">
  <label for="password" class="form-label text-primary">Password</label>
  <input type="password" class="form-control" id="password" placeholder="Enter password" name="surname">
</div>
<div class="mb-3">
  <label for="email" class="form-label text-primary">Email</label>
  <input type="text" 
    class="form-control" 
    id="email" 
    placeholder="Enter email" 
    name="email" 
    value="
<?php
if (isset($_SESSION['email'])) {
    echo $_SESSION['email'];
}
?>
">
</div>
  <button class="btn btn-primary mt-3">Submit</button>
</form>
</div>
</body>
</html>