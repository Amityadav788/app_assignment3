<?php

include('../connection.php');

$query =" SELECT * FROM `users` ";
$result =mysqli_query($connection,$query);
$output = [];

while($row =mysqli_fetch_assoc($result)){

    $output[] = $row;

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

<div class="container">
  <h2>User list</h2>
  <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th> 
        <th>Phone</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
        <?php foreach($output as $key => $value){ ?>
        <tr>
            <td><?php echo $value['name']; ?> </td>
            <td><?php echo $value['email']; ?> </td>
            <td><?php echo $value['password']; ?> </td>
            <td><?php echo $value['phone']; ?> </td>
            <td>
                <?php if($value['is_active'] == 1){ ?>
                <a role="button" class="btn btn-info" href="http://localhost/assignment3/admin.php/update_status.php?status=1&id=<?php echo $value['id']; ?>" >Inactive</a>
                <?php } else{ ?>
                <a role="button" class="btn btn-danger"  href="http://localhost/assignment3/admin.php/update_status.php?status=0&id=<?php echo $value['id']; ?>" >Active</a>
                <?php } ?>    
            </td>
            
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
