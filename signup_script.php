<?php
require 'includes/common.php';
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$name=$_POST['name'];
$name=mysqli_real_escape_string($con,$name);
$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);
$password=MD5($password);
$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);
$city=$_POST['city'];
$city=mysqli_real_escape_string($con,$city);
$address=$_POST['address'];
$address=mysqli_real_escape_string($con,$address);
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_contact="/^[6789][0-9]{9}$/";
$query="SELECT * from users where email='$email'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)>=1){
    $error='<span class="red"> User already exists.</span>';
    header('location:products.php?email_error=' . $error);
}
else if(!preg_match($regex_email,$email))
{
    $error="<span class='red'> Invalid Email Id.</span>";
    header('location:products.php?invalid_error=' . $error);
}
else if(!preg_match($regex_contact,$contact))
{
    $error="<span class='red'> Not a valid Phone number.</span>";
    header('location:products.php?contact_error=' . $error);
}
else{
    $insert_query="INSERT INTO users(name,email,password,contact,city,address) VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con,$insert_query) or die(mysqli_error($con));
    $_SESSION['email']=$email;
    $_SESSION['user_id']=mysqli_insert_id($con);
    header('location:home.php');
}