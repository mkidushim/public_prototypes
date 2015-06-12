<?php
require('mysql_connect.php');

// Perform queries 
$query = "SELECT * FROM `todo items` Where Title = 'sonic' ";

$row = mysqli_query($con ,$query);
//print(mysqli_num_rows($row));
while ($row = mysqli_fetch_assoc($row)){
$output[] = $row;

}
print_r($output);
?>