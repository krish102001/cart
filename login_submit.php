<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);
$password=md5($password);
$email_query="SELECT id,email FROM users where email='" . $email . "'";
$password_query="SELECT password FROM users where password='" . $password . "'";
$result=mysqli_query($con,$email_query) or die(mysqli_error($con));
$result_password=mysqli_query($con,$password_query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0)
{
    $error=" <div class='alert alert-danger'>Incorrect email id.</div>";
    header('location:index.php?email_error=' .$error);
    die();
}
else if(mysqli_num_rows($result_password)==0)
{
    $error=" <div class='alert alert-danger'>Incorrect Password.</div>";
    header('location:index.php?password_error=' .$error);
    die();
}
else{
    $row=mysqli_fetch_array($result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$row['id'];
    header('location:home.php');
}