<?php 

include('./connection.php');

$id = $_GET['id'];

$query =" DELETE FROM `contacts` WHERE id = $id ";
$result =mysqli_query($connection,$query);

if($result){

    $_SESSION['success'] =' Record deleted successfully ';

} else{ 

    $_SESSION['error'] =' Record not deleted ';

}

header("location:http://localhost/assignment3/contact_listing.php");
exit;


?>