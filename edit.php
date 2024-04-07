<?php 

include('./connection.php');

$id =$_GET['id'];

$query =" SELECT * FROM users WHERE id = $id ";
$result =mysqli_query($connection,$query);
$row =mysqli_fetch_assoc($result);

$name =$row['name'];
$email =$row['email'];
$pass =$row['password'];
$phone =$row['phone'];

$msg =false;
$error =false;

if(isset($_SESSION['success']) && !empty($_SESSION['success'])){

    $msg =$_SESSION['success'];
    unset($_SESSION['success']);

}

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){

    $error =$_SESSION['error'];
    unset($_SESSION['error']);

}



?>

<!DOCTYPE html>
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

<?php if($msg == true){ ?>
    <div class="alert alert-success">
    <p><?php echo $msg ; ?></p>    
    </div>
<?php } ?>

<?php if($error){ ?>
   <div class="alert alert-danger">
   <?php if(is_array($error) == true){ ?>
   <?php foreach($error as $key => $value){ ?>
   <p><?php echo $error; ?></p>
   <?php } ?>
   <?php } else{ ?>
   <p><?php echo $value; ?></p>
   <?php } ?>     
   </div> 
<?php } ?>

<div class="container">
  <h2>Edit form</h2>
  <form method="post" action="./edit_server.php">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="<?php echo $name ;?>" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $email ;?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" value="<?php echo $pass ;?>" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="number" class="form-control" id="phone" value="<?php echo $phone ;?>" placeholder="Enter phone" name="phone">
    </div>
    <input type="hidden" id="name" name="id" value="<?php echo $row['id']; ?>">
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Edit</button>
  </form>
</div>

</body>
</html>
