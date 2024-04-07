<?php 

include('./connection.php');

$req =['name', 'email', 'phone', 'address'];

$error =[];

foreach($req as $key => $value){

    if(isset($_POST[$value]) && empty($_POST[$value])){

        $error[] =$value. " is required ";
    }
}

if(count($error) == 0){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $addr =$_POST['address'];
    $id =$_POST['id'];
    
    $query =" UPDATE `contacts` SET `name` ='$name', `email` ='$email', `phone` ='$phone', `address` ='$addr' WHERE id = $id ";
    $result =mysqli_query($connection,$query);

    $_SESSION['success'] ='Edited successfully';

} else{

    $_SESSION['error'] = $error;

}

header("location:http://localhost/assignment3/edit_contact.php?id=".$id);
exit;

?>