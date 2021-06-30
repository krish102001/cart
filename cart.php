<?php 
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Cart | E-store</title>
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
        <?php        include 'includes/header.php'; ?>
        <div class="container con">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
        <table class="table table-bordered">
            <thead>
                 <tr><th>Item Number</th><th>Price</th></tr>
            </thead>
            <?php
                        $sum = 0;
                        $id=""; 
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT price, products.id FROM user_items INNER JOIN products ON user_items.products_id = products.id WHERE user_items.users_id='" . $user_id . "' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
            <tbody>
                
                 <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["price"];
                                    $id .= $row["id"] . ",";
                                    echo "<tr><td>" . "<center>#" . $row["id"] . "</center><div class='text-center'><a href='cart_remove.php?id={$row['id']}' class='btn btn-danger'> Remove</a></div></td>". "<td>" . $row["price"] . "</td></tr>";
                                }
                                $id=rtrim($id,",");
                                echo "<tr><td>Total</td><td>Rs " . $sum . "</td></tr>";
                                echo "<tr><td></td><td><div class='text-right'><a href='success.php?id=" . $id . "' class='btn btn-primary'>Confirm Order</a></div></td></tr>";
                                ?>
            </tbody>
             <?php       
                        } else {
                            echo "<div class='alert alert-warning'>Add items to the cart first!</div>";
                        }
                        ?>
        </table>            
                </div>
            </div>
        </div>
        <br>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>