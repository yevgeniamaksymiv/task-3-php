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
  <?php
  session_start();
  ?>
  <div class="container">
    <form class="mt-4" action="" method="post">
      <div class="mb-3">
        <label for="name" class="form-label text-primary">Name</label>
        <input type="text" 
          class="form-control" 
          id="name" 
          placeholder="Enter name" 
          name="name">
      </div>
      <div class="mb-3">
        <label for="country" class="form-label text-primary">Country</label>
        <input type="text" 
          class="form-control" 
          id="country" 
          placeholder="Enter country" 
          name="country"
          value="<?php echo $_SESSION['country'];?>">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label text-primary">Age</label>
        <input type="text" 
          class="form-control" 
          id="age" 
          placeholder="Enter age" 
          name="age"
          value="<?php echo $_SESSION['age'];?>">
      </div>
      <button class="btn btn-primary mt-3">Submit</button>
    </form>
  </div>
</body>
</html>
