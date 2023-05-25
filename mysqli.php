<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db= "qlsv_db";
global $conn;
// Create connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
  die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($conn,$db);

?>
