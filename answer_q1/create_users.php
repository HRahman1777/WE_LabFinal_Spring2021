<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Add User</title>
  <style>
    .text-center {
      background-color: wheat;
      padding: 5px;
      border-radius: 15px;
    }
  </style>
</head>

<body class="container">
  <br>
  <br>
  <h1 class="text-center">Add User</h1>
  <br>
  <br>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off" class="container">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input name="id" type="text" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Age</label>
      <input name="age" type="number" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Username</label>
      <input name="username" type="text" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'commonDB') or die("not connected" . mysqli_error());

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $age = mysqli_real_escape_string($connection, $_POST['age']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $query = "SELECT id FROM users_table WHERE id='$id'";
    $result = mysqli_query($connection, $query) or die("Query Faild");

    $count = mysqli_num_rows($result);
    if ($count > 0) {
      echo "ID already Exist";
    } else {
      $query1 = "INSERT INTO users_table (Names,id,age,username,passwordd)
                            VALUES ('$name','$id',$age,'$username','$password')";
      $result2 = mysqli_query($connection, $query1) or die("Query Faild2");
    }

    if ($result2) {
      header("location: users_list.php");
    }
  }
  ?>
</body>

</html>