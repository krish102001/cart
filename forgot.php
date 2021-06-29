<?php 
require 'includes/common.php';
if(isset($_SESSION['email']))
    header('location:home.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
         <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <?php include 'includes/header.php' ?>
        <div class="container-fluid">
           
            <?php 
            if(isset($_GET['password_error']))
        {
        echo $_GET['password_error'];
        }
        ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-2">
                      <h4>Forgot password</h4>
                    <form method="POST" action="forgot_submit.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required>
                                <?php 
                                    if(isset($_GET['email_error']))
        {
        echo $_GET['email_error'];
        }?>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="contact" name="contact" maxlength="10" size="10" pattern="^[6789][0-9]{9)" class="form-control" required>
                            <?php
                            if(isset($_GET['contact_error']))
        {
        echo $_GET['contact_error'];
        }

                            ?>
                        </div>
                        <div class="form-group">
                            <label for="np"> New Password</label>
                            <input type="password" name="np" pattern=".{6,}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="rnp">Re-type New Password</label>
                            <input type="password" name="rnp" pattern=".{6,}" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <?php include 'includes/footer.php' ?>
    </body>
</html>
