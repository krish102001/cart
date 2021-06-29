<?php require 'includes/common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
         <title></title>
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
                  <div class="col-sm-10">
                  <h3>LIVE SUPPORT</h3>
                  <p>24 hours | 7 days a week | 365 days a year Live Technical Support<br>It is a long established fact that a reader will be distracted by the readable content of a page 
                  when looking at its layout. The point of using lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipusm available,
                  but the majority has suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't any embarrasing hidden in the middle of text.</p>
                  </div>
                  <div class="col-sm-2">
                      <img src="images/contact.jpg" class="img-responsive">
                  </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h3>CONTACT US</h3>
                    <form method="POST" action="contact_submit.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required="true">
                        </div>
                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                         <div class="form-group">
                            <label for="name">Message</label>
                            <textarea name="message" class="form-control" required="true"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php if(isset($_GET['success'])) echo $_GET['success']; ?>
                </div>
                <div class="col-sm-4">
                    <h3><strong>Company Information:</strong></h3><br>
                    <p>500 lorem ipsum dollar st,<br>Thoothukudi,<br>India.<br>Phone:+91 9999999999<br>Fax:(000) 000 00 00 0<br>Email:gmail@mynation.com<br> Follow us on Facebook, Twitter, Instagram.</p>
                </div>
            </div>  
        </div>
        <br>
        <?php include 'includes\footer.php';
        ?>
    </body>
</html>

