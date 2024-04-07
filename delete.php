<?php 

include('./connection.php');

$id =$_GET['id'];

$query =" DELETE FROM users WHERE id = $id ";
$result =mysqli_query($connection,$query);

if($result == true){

    $_SESSION['success'] =' Record deleted successfully ';

} else{

    $_SESSION['error'] =' Record not deleted ';
    
}

?>