<?php

include('./connection.php');

$search =$_POST['search'];

$author_id =$_SESSION['id'];

$query =' SELECT * FROM `contacts` WHERE author_id ='.$author_id.' AND (`name` LIKE "%'.$search.'%" OR `phone` LIKE "%'.$search.'%" OR email LIKE "%'.$search.'%")';

$result =mysqli_query($connection,$query);

$records =[];

while($row =mysqli_fetch_assoc($result)){

    $records[] = $row;

}

$_SESSION['search_result'] = $records;

$_SESSION['search'] = $search;


header("location:http://localhost/assignment3/contact_listing.php");
exit;




?>