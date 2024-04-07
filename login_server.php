<?php 

include('./connection.php');

$error =[];
$url ='';

$req =['email', 'password'];

foreach($req as $key => $value){

    if(empty($_POST[$value])){

    $error[] =$value. " is required ";

  }

}
// print_r($_POST);die;

if(count($error) == 0){

    $email =$_POST['email'];
    $pass =$_POST['password'];

    $query =" SELECT * FROM `users` WHERE `email` ='$email' AND `password` ='$pass' " ;
    $result =mysqli_query($connection,$query);
    $count =mysqli_num_rows($result);

    if($count > 0){

        $row =mysqli_fetch_assoc($result);
    
        if($row['is_active'] == 0){

            $_SESSION['error'] = 'Since you are blocked. Please contact your administrator!';
            $url ="http://localhost/assignment3/login.php";

        } else {

            $_SESSION['id'] = $row['id'];
            $_SESSION['success'] ='Request is valid';
            $url ="http://localhost/assignment3/home.php";

        }

    } else{

        $_SESSION['error'] = 'Invalid Credentials!';

    }
   
} else{

    $_SESSION['error'] = $error ;
    $url ="http://localhost/assignment3/login.php";

}

header("location:".$url);
exit;

?>