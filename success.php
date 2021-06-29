<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$id=$_GET['id'];
$product_id=explode(",",$id);
foreach($product_id as $product){
   $query = "UPDATE user_products SET status='Confirmed' WHERE users_id='" . $user_id . "' AND products_id IN ('" . $product . "') and status ='Added to cart'";
    mysqli_query($con,$query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
    <head>
          <title>Success | E-store</title>
          <link href="css/bootstrap.css" rel="stylesheet">
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
        <div class="container con">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <center>
            <p>Thank you for ordered from E-store.Your order will be delivered shortly.</p>
            <hr>
            <p>Order Some more electronic Items<a href="home.php" style="color:blue"> here.</a></p></center>
  
        </div>
            </div>
        </div>
        <?php include 'includes/footer.php' ?>
    </body>
</html>
