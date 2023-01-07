<?php
$servername = "localhost";
$username = "it65309010106";
$password = "it65309010106";
$dbname = "it65309010106";

// Create connection
$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    //echo"<h1> connect suuccessfull</h1>";
}
?>