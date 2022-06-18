<?php include "db.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE FROM crud where id=$id ";

    $result = mysqli_query($connection, $query);

    if($result){
        header("location: display.php");
    }else{
        echo mysqli_error($connection);
    }
}


?>