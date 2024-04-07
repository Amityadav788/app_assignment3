<?php

include('./connection.php');

$author_id = $_SESSION['id'];

$query =" SELECT COUNT(id) as total_count FROM `contacts` WHERE author_id = $author_id ";
$result =mysqli_query($connection,$query);
$out =[] ;

while($row =mysqli_fetch_assoc($result)){

    $out[] =$row;
    $count =$row['total_count'];

}



$query =" SELECT COUNT(id) as total_count from `users` ";
$result =mysqli_query($connection,$query);
$user ='';

while($row =mysqli_fetch_assoc($result)){

    $user =$row;
    $count_users =$row['total_count'];

}


?>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/assignment3/add.php">Registration Portal</a>
      <a class="navbar-brand" href="http://localhost/assignment3/contact_listing.php">List(<?php echo $count; ?>)</a>
      <a class="navbar-brand" href="http://localhost/assignment3/list.php">Users list(<?php echo $count_users; ?>)</a>
      <a class="navbar-brand" href="http://localhost/assignment3/login.php">Add contact</a>
    </div>
    <ul class="nav navbar-nav">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
       
         
      </div>
   
      <li class="navbar-brand"><a href="http://localhost/assignment3/logout.php">Logout</a></li>
    </ul>
  </div>
</nav> 