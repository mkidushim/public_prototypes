<?php
$con=mysqli_connect("localhost","root", "root", "myfirst_DB");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$query = mysqli_query($con,"SELECT * FROM user WHERE ");
$query2 = mysqli_query($con,"SELECT title FROM todo items");
print_r($query);
print_r($query2);

mysqli_close($con);
?>