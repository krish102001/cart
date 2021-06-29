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
      <div class="container">
<div id="login" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOGIN</h4>
            </div>
            <div class="modal-body">
                <p>Don't have an account?<a href="signup.php" style="color:blue; text-decoration:none;">Register</a>
                <form method="POST" action="login_submit.php">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">       
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required="true" class="form-control" pattern=".{6,}">
                           </div>
                   
                    <button type="submit" class="btn btn-primary">LOGIN</button>      
                </form>
                <br>
                <a href="forgot.php" style="color:blue; text-decoration:none;">Forgot Password?</a>
            </div>
        </div>
    </div>
    
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">      
          <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                        <span class="icon-bar"></span>    
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button> 
              <a class="navbar-brand" href="index.php">E-Store</a>  
                </div>         
                <div class="collapse navbar-collapse" id="navBar">
                 <ul class="nav navbar-nav navbar-right">
                     <?php if(isset($_SESSION['email'])){ 
                         ?>
                      <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
                     <?php } 
                     else{ 
                         ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a role="button" data-toggle="modal" data-target="#login" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                     <?php } ?>
            </ul>
                </div>
        </div>
</nav>
       
        
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
                            <img src="images\m4.jpg" class="img-responsive">
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
                            <img src="images\m6.png" class="img-responsive">
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
                            <img src="images\m1.jpeg" class="img-responsive">
                            <p>Gionee A1 ( 64GB , 4 GB ) Black,Rs  16,678</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 5</div>
                        <div class="panel-body">
                            <img src="images\m2.jpg" class="img-responsive">
                            <p>Alcatel OneTouch Fierce XL With Windows 10,rs 12,999</p>
                            <a role="button" data-toggle="modal" data-target="#login" class="btn btn-block btn-primary">Order Now!</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     <div class="panel panel-default">
                        <div class="panel-heading">Mobile 6</div>
                        <div class="panel-body">
                            <img src="images\m3.jpg" class="img-responsive">
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
