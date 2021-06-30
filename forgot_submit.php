<?php
require 'includes/common.php';
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);
$np=$_POST['np'];
$np=mysqli_real_escape_string($con,$np);
$rnp=$_POST['rnp'];
$rnp=mysqli_real_escape_string($con,$rnp);
$email_query="SELECT email from users where email='$email'";
$contact_query="SELECT contact from users where contact='$contact'";
$email_result=mysqli_query($con,$email_query) or die(mysqli_error($con));
$contact_result=mysqli_query($con,$contact_query) or die(mysqli_error($con));        
if(mysqli_num_rows($email_result)==0){
    $error="<div class='red'>Invalid Email Id</div>";
    header('location:forgot.php?email_error=' .$error);
    die();
}
else if(mysqli_num_rows($contact_result)==0){
    $error="<div class='red'>You entered incorrect contact number.Kindly enter the correct contact number.</div>";
    header('location:forgot.php?contact_error=' .$error);
    die();
}
else if(strlen($np)!= strlen($rnp) or $np != $rnp)
{
    $error="<div class='alert alert-danger'>Password do not match.</div>";
    header('location:forgot.php?password_error=' .$error);
    die();
}
else{
    $np=md5($np);
    $update_query="UPDATE users set password='" . $np . "' where email='" . $email . "'";
    mysqli_query($con,$update_query) or die(mysqli_error($con));
    $success="<div class='alert alert-success'>Password changed successfully.Login to order!</div>";
    header('location:index.php?success=' .$success);
    die();
}
?>