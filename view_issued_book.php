<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $book_name = "";
    $author = "";
    $book_no = "";
    $student_name = "";
    $query = "select issued_books.book_name,issued_books.book_author,issued_books.book_no,
    users.name from issued_books left join users on issued_books.student_id = users.id where issued_books.status = 1";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td
        {
        margin: 10px 180px; 
        border:2px solid black;
        border-collapse:collapse;
        width: 700px;
        text-align:center;
        }
        </style>
    <title>Issued Books</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
        <center><h2>Issued Book's Detail</h2><br></center>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Number</th>
                            <th>Student Name</th>
                            
                            
                        </tr>
                
                    <?php
                        $query_run = mysqli_query($connection,$query);
                        while ($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                            <tr>
                            <td><?php echo $row['book_name'];?></td>
                            <td><?php echo $row['book_author'];?></td>
                            <td><?php echo $row['book_no'];?></td>
                            <td><?php echo $row['name'];?></td>
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