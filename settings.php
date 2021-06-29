<?php require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Settings | E-store</title>
           <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php        include 'includes/header.php'; ?>
        <div class="container con">
            <div class="row">  
                <div class="col-sm-6 col-sm-offset-2">
                      <?php if(isset($_GET['password_error'])){
                        echo $_GET['password_error'];
                    }
                    ?>
                    <h3>Change Password</h3>
                    <form method="POST" action="settings_submit.php">
                        <div class="form-group">
                            <input type="password" pattern=".{6,}" class="form-control" name="op" placeholder="Old Password">
                            <?php 
                            if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }?>
                        </div>
                        <div class="form-group">
                            <input type="password" pattern=".{6,}" class="form-control" name="np" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" pattern=".{6,}" class="form-control" name="rnp" placeholder="Re-type New Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <?php        include 'includes/footer.php'; ?>
    </body>
</html>