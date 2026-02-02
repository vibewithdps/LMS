<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $book_name = "";
    $book_no = "";
    $author_id = "";
    $cat_id = "";
    $book_price = "";
    $query = "select * from books where book_no = '$_GET[bn]'";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run))
    {
        $book_name = $row['book_name'];
        $book_no = $row['book_no'];
        $author_id = $row['author_id'];
        $cat_id = $row['cat_id'];
        $book_price = $row['book_price'];
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Book</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
      <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
      
   </style>
    </head>
<body>
    <center><h4>Edit Book</h4><br></center>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="mobile">Book Number:</label>
                        <input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control" disabled required>
                    </div>
                    <div class="form-group">
                        <label for="email">Book Name:</label>
                        <input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Author ID:</label>
                        <input type="text" name="author_id" value="<?php echo $author_id;?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Category ID:</label>
                        <input type="text" name="cat_id" value="<?php echo $cat_id;?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Book Price:</label>
                        <input type="text" name="book_price" value="<?php echo $book_price;?>" class="form-control" required>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update Book</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
    if(isset($_POST['update']))
    {
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"library");
        $query = "update books set book_name = '$_POST[book_name]',author_id = $_POST[author_id],cat_id = $_POST[cat_id],book_price = $_POST[book_price] where book_no = $_GET[bn]";
        $query_run = mysqli_query($connection,$query);
        header("location:manage_book.php");
    }
?>