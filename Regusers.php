<?php
    session_start();
    #fetch data from database
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $name = "";
    $email = "";
    $password = "";
    $mobile = "";
    $address = "";
    $query = "select * from users";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>All Reg Users</title>
    </head>
<body>
<?php require 'Partials/_navuser.php'
   ?>
   <br>
    <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
        <center><h4>Registered Users Detail</h4><br></center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <form>
                    <table class="table-bordered" width="750px" style="text-align: center">
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                
                    <?php
                        $query_run = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                            $name = $row['name'];
                            $email = $row['mobile'];
                            $mobile = $row['email'];
                            $address = $row['address'];
                    ?>
                        <tr>
                            <td><?php echo $name;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $mobile;?></td>
                            <td><?php echo $address;?></td>
                        </tr>
                    <?php
                        }
                    ?>    
                </table>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
</body>
</html>