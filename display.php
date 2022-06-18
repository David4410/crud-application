<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b4/css/bootstrap.css">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-light"> Add User </a></button>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $query = "SELECT * FROM crud ";

  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $password = $row['password'];
     
      echo  '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-white"> Update </a></button>
      <button class="btn btn-danger"><a href="delete.php ? deleteid='.$id.'"class="text-white"> Delete </a></button>
      </td>
    </tr>';
  }
 ?>
  
</tbody>
</table>
</div>
    
</body>
</html>