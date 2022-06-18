<?php include "db.php";

$id = $_GET['updateid'];

$query = "SELECT * FROM crud where id=$id ";

$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    

    $query  = "update crud set ";
    $query .= "id = '$id',";
    $query .= "name = '$name',";
    $query .= "email = '$email',";
    $query .= "mobile = '$mobile',";
    $query .= "password = '$password' ";
    $query .= "where id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        # code...
        // echo "Update successfully ";
       header("location: display.php");
    }else{
        die("QUERY FAILED" . mysqli_error($connection));
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="b4/css/bootstrap.css">
    <script src="b4/js/jquery.min.js"></script>
    <script src="b4/js/bootstrap.js"></script>
    <script src="b4/js/proper.js"></script>
</head>
<body>

<div class="container">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>" class="my-5">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value="<?php echo $name ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your Email" autocomplete="off" value="<?php echo $email ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="number" class="form-control" name="mobile" placeholder="Enter your Mobile" autocomplete="off" value="<?php echo $mobile ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value="<?php echo $password ?>">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Update</button>

        </form>

</div>
</body>
</html>