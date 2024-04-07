<?php

include('./connection.php');

$req_field =['name', 'email', 'password', 'phone'];

$error =[] ;
$url ='';

foreach($req_field as $key => $value){

    if(empty($_POST[$value])){

        $error[] = $value. " is required ";

    }

    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){

        $temp = $_FILES['image']['tmp_name'];
        $name =$_FILES['image']['name'];
        $path =pathinfo($name);

        $ext =$path['extension'];
        $basename =$path['basename'];
        $unique_name =time().'.'.$ext;
        $destination ='./uploads/'.$unique_name;
        $is_uploaded =move_uploaded_file($temp,$destination);

    }
}

if(count($error) == 0){

    $_SESSION['success'] =' form submitted successfully ';
    $url ="http://localhost/assignment3/list.php";

    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
    $phone =$_POST['phone'];
   
    $query =" INSERT INTO users(`name`, `email`, `password`, `phone`, `image`) VALUES ('$name', '$email', '$pass', '$phone', '$unique_name') ";
    $result =mysqli_query($connection,$query);


} else{

    $_SESSION['error'] = $error ;
    $url ="http://localhost/assignment3/add.php";

}

header("location:".$url);
exit;


?>