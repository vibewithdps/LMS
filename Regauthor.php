<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $id='author_id';
    $name='author_name';
    $query = "select * from authors";
?>
<!DOCTYPE html>
<html>
<head>
<style>
        table,th,td
        {
        margin: 0px 300px; 
        border:3px solid black;
        border-collapse:collapse;
        width: 400px;
        text-align:center;
        }
        </style>
    <title>All Reg Authors</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
        <center><h4>Registered Authors Detail</h4><br></center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <table>
                        <tr>
                            <th>Author ID</th>
                            <th>Name</th>    
                        </tr>
                    <?php
                        $query_run = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                            $id = $row['author_id'];
                            $name = $row['author_name'];
                    ?>
                        <tr>
                            <td><?php echo $id ;?></td>
                            <td><?php echo $name;?></td>
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