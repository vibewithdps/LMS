<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "library";
$conn = mysqli_connect($servername, $username, $password, $database);
//$sql = "CREATE DATABASE Library";
//mysqli_query($conn, $sql);
if(!$conn)
{
    die("Failed connection:" .mysqli_connect_error());
}
//  else{
//  echo "Connection was successfully";
//  }
?>