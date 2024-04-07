<!DOCTYPE html>


<?php

include('./connection.php');

if(!isset($_SESSION['id'])){

    header("location:http://localhost/assignment3/login.php");
    
}


$error =false;
$msg =false;

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $error =$_SESSION['error'];
    unset($_SESSION['error']);

}

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

    $msg =$_SESSION['success'];
    unset($_SESSION['success']);

}

?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php if($msg){ ?>
   <div class="alert alert-success">
   <p><?php echo $msg; ?></p> 
   </div> 
<?php } ?>

<?php if($error){ ?>
  <div class="alert alert-danger">
  <?php if(is_array($error) == true){ ?>
  <?php foreach($error as $key => $value){ ?>
  <p><?php echo $value; ?></p>
  <?php } ?>
  <?php } else{ ?>
  <?php echo $value; ?>
  <?php } ?>        
  </div>  
<?php } ?>  

<div class="container">
  <h2>Add contact</h2>
  <form method="post" action="./home_server.php">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
