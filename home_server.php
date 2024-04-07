<?php 

include('./connection.php');

$error =[];

$req =['name', 'email', 'phone', 'address'];

foreach($req as $key => $value){

    if(isset($_POST[$value]) && empty($_POST[$value])){

        $error[] =$value. " is required ";
        
    }
}

if(count($error) == 0){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $a_id =$_SESSION['id'];
    
    $query =" INSERT INTO contacts (`name`, `email`, `phone`, `address`, `author_id`) VALUES ('$name', '$email', '$phone', '$address', '$a_id') ";
    $result =mysqli_query($connection,$query);
    
    $_SESSION['success'] ='Form submitted successfully';
   

} else{

    $_SESSION['error'] = $error;
    
}

header("location:http://localhost/assignment3/home.php");
exit;


?>