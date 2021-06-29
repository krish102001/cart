<?php
require 'includes/common.php';
$op=$_POST['op'];
$op= mysqli_real_escape_string($con,$op);
$op=md5($op);
$np=$_POST['np'];
$np= mysqli_real_escape_string($con,$np);
$np=md5($np);
$rnp=$_POST['rnp'];
$rnp= mysqli_real_escape_string($con,$rnp);
$rnp=md5($rnp);
$query="SELECT password FROM users where password='$op'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0)
{
    $error="<span class='red'>Incorrect password.Please enter the correct password</span>";
    header('location:settings.php?error=' .$error);
    die();
}
else if($np!=$rnp or strlen($np)!=strlen($rnp))
{
    $error="<div class='alert alert-danger'>Password do not match.</div>";
    header('location:settings.php?password_error=' .$error);
    die();
}
else{
    $update_query="UPDATE users set password='" . $np . "'";
    mysqli_query($con,$update_query) or die(mysqli_error($con));
    $success="<div class='alert alert-success'>Password Changed successfully</div>";
    header('location:home.php?success=' .$success);
    die();
}