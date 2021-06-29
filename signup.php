<?php 
require 'includes/common.php';
if(isset($_SESSION['email']))
    header('location:home.php');
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Sign Up</title>
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
        <?php include 'includes\header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/main.png" class="img-responsive">
                </div>
                <div class="col-sm-6">
                  <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true">
                            </div>
                               <?php if(isset($_GET['invalid_error'])){
                                echo $_GET['invalid_error'];
                            }
                          ?>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                               <?php if(isset($_GET['contact_error'])){
                                echo $_GET['contact_error'];
                            }
                          ?>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <div class="text-right"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                            <?php if(isset($_GET['email_error'])){
                                echo $_GET['email_error'];
                            }
                          ?>
                            <br>
                        </form>
                </div>
            </div>
        </div>
        <br>
        <?php include 'includes\footer.php';
        ?>
    </body>
</html>
