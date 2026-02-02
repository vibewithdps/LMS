<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "select * from category";
    $cat_name = "";
?>
<!DOCTYPE html>
<html>
<head>
<style>
        table,th,td
        {
        margin: 0px 350px; 
        border:2px solid black;
        border-collapse:collapse;
        width: 300px;
        text-align:center;
        }
        </style>

    <title>Book's Category</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
    <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
        <center><h4>Registered Book's Category</h4><br></center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <table>
                        <tr>
                            <th>Category Name</th>
                        </tr>
                    <?php
                        $query_run = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                            ?>
                            <tr>
                            <td><?php echo $row['cat_name'];?></td>
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