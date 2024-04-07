<?php 

include('./connection.php');

$id =$_POST['id'];

$req =['name', 'email', 'password', 'phone'];

$error =[];

foreach($req as $key => $value){

    if(!isset($_POST[$value]) && empty($_POST[$value])){

        $empty[] =$value. " is required ";

    }
}

if(count($error) == 0){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $phone =$_POST['phone'];

    $query =" UPDATE `users` SET `name` ='$name', `email` ='$email', `password` ='$pass', `phone` ='$phone' WHERE id = $id ";
    $result =mysqli_query($connection,$query);

    $_SESSION['success'] =' Record updated successfully ';

} else{

    $_SESSION['error'] = $error;
}

header("location:http://localhost/assignment3/edit.php?id=".$id);
exit;


?>