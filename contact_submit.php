<?php
require 'includes\common.php';
$email=$_POST['email'];
$name=$_POST['name'];
$message=$_POST['message'];
$query="INSERT INTO contact(name,email,message) VALUES('" . $email . "','" . $name . "','" . $message . "')";
mysqli_query($con,$query) or die(mysqli_error($con));
$success="<div> Your message is recorded.Thank you for your support.</div>";
header('location: contact.php?success=' .$success);
?>

