<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
            </div>
            <font style="color: white" ><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
            <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
            <div class="right-div">
               <a href="/loginsystem/logout.php" class="btn btn-danger pull-right"> Log Me Out</a>
              </li>
            </ul>
        </div>
    </nav><br>