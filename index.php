<?php 
require 'includes/common.php';
if(isset($_SESSION['email']))
    header('location:home.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-store</title>
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
       
        
        <div class="container-fluid">
             <?php           if(isset($_GET['email_error']))
                             {
                             echo $_GET['email_error'];
                             }
                          if(isset($_GET['password_error']))
                          {
                              echo $_GET['password_error'];
                               }
                         if(isset($_GET['success']))
                          {
                              echo $_GET['success'];
                              }
                              ?>
              <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 1</div>
                        <div class="panel-body">
                            <img src="images\m4" class="img-responsive">
                            <p>ONEPLUS 5,Rs  30,678</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 2</div>
                        <div class="panel-body">
                            <img src="images\m5.png" class="img-responsive">
                            <p>One Plus 3 6GB RAM,rs 30,168</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 3</div>
                        <div class="panel-body">
                            <img src="images\m6" class="img-responsive">
                            <p>OnePlus 6T A6013 128GB Storage + 8GB Memory T-Mobile and GSM + Verizon Unlocked 6.41 inch AMOLED Display,Rs  26,375</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 4</div>
                        <div class="panel-body">
                            <img src="images\m1" class="img-responsive">
                            <p>Gionee A1 ( 64GB , 4 GB ) Black,Rs  16,678</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 5</div>
                        <div class="panel-body">
                            <img src="images\m2" class="img-responsive">
                            <p>Alcatel OneTouch Fierce XL With Windows 10,rs 12,999</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 6</div>
                        <div class="panel-body">
                            <img src="images\m3" class="img-responsive">
                            <p>Asus Zenfone Max Pro M1 ( 64GB , 6 GB ) GREY,Rs  14,999</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <?php include 'includes\footer.php';
        ?>
    </body>
</html>
