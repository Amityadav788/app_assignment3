<?php

include('../connection.php');

$status =$_GET['status'];
$id =$_GET['id'];


if($status == 1){

    $query =" UPDATE `users` SET `is_active` = 0 WHERE id = $id ";
    $result =mysqli_query($connection,$query);

    
} else{

    $query =" UPDATE `users` SET `is_active` = 1 WHERE id = $id ";
    $result =mysqli_query($connection,$query);

}

header("location:http://localhost/assignment3/admin.php/dashboard.php?id=".$id);
exit;

?>