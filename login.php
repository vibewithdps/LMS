<?php
include 'Partials/_dbconnect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM signup where username ='$name' AND password='$password'";
    $result= mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
if($num == 1)
 {
    echo "<script>alert('Login Credentials')</script>";
    session_start();
    $_SESSION['loggedin']= true;
    $_SESSION['username']= $name;
    header("location: welcome.php");
 }
 else
 { echo "<script>alert('Login Not Credentials')</script>";
    echo "Error...." .mysqli_error($conn);
 }
mysqli_close($conn);
}
?>
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <style type="text/css">
    #main_content
    {
        background: rgba(245, 245, 245, 0.9);
        padding: 40px;
    }
    #side_bar
    {
        background: rgba(245, 245, 245, 0.9);
        padding: 40px;
    }
    body
    {
      background: rgba(245, 245, 245, 0.9);
      background-image: url("https://img.freepik.com/free-photo/abundant-collection-antique-books-wooden-shelves-generated-by-ai_188544-29660.jpg?size=626&amp;ext=jpg&amp;ga=GA1.1.1546980028.1704240000&amp;semt=sph");
    }
</style>
  <body>
   <?php require 'Partials/_nav.php' ?>
   <div class="row">
        <div class="col-md-4" id="side_bar">
            <h5>Today's Quote</h5>
            <h6>“There is more treasure in books than in all the pirate's loot on Treasure Island"</h6>
            <p>~ Walt Disney</p>
            <h5>Library Timing</h5>
            <ul>
                <li>Opening: 9:00 AM</li>
                <li>Closing: 12:00 PM</li>
            </ul>
            <h5>What We provide ?</h5>
            <ul>
                <li>AC Rooms</li>
                <li>Free Wi-fi</li>
                <li>Learning Environment</li>
                <li>Discussion Room</li>
                <li>Free Electricity</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">  
   <div class="container my-4">
        <h1 class="text-center">Login To Our Library Management</h1>
        <form action="/loginsystem/login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>