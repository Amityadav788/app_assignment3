<?php

session_start();

$username ='admin';
$pass ='1234';

$error = [];
$url ='';

$req =['username', 'password'];

foreach($req as $key => $value){

    if(empty($_POST[$value])){

        $error[] = $value. " is required ";

    }
}


if(count($error) == 0){

    $user =$_POST['username'];
    $password =$_POST['password'];
    
    if(($username == $user) && ($pass == $password)){

        $_SESSION['s_admin'] = true;
        $url ="http://localhost/assignment3/admin.php/dashboard.php";

    } else{

        $_SESSION['error'] = 'request is not valid'; 
        $url ="http://localhost/assignment3/admin.php/login.php";
    }

} else{

    $_SESSION['error'] = $error;
    $url ="http://localhost/assignment3/admin.php/login.php";
}

header("location:".$url);
exit;


?>