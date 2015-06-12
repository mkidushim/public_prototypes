<?php
session_start();
// if (isset($_SESSION['id'])){
require('mysql_connect.php');
print_r($_POST);
$title = mysql_real_escape_string($_POST['title']);
$details = mysql_real_escape_string($_POST['details']);
$time = mysql_real_escape_string($_POST['timestamp']);
$session = mysql_real_escape_string($_SESSION['user_id']);
$query = "INSERT INTO `todo items` (Title, Details, Date_T, user_id) VALUES ('$title', '$details', '$time', '$_SESSION[user_id]')"; 
$result = mysqli_query($con, $query);
print_r('<br>query result: '.$result."<br>");
print_r('rows affected: '.mysqli_affected_rows($con)."<br>");
print('user_id: '.$session);
// }
// else {
// 	exit();
// }
// cc8b1c146f11f270cece67bbcf1bae1c