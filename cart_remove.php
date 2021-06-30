<?php

require "includes/common.php";
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM user_items WHERE products_id='$product_id' AND users_id='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>

