<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn){die("Could not connect to databse");}
mysqli_select_db($conn,"soffee");
$usernam = $_POST['username'] ;
$email = $_POST['EmailId'] ;
$pass = $_POST['Password'] ;
// $dat = date("d-m-Y");

if(!isset($usernam,$email,$pass)){die("not set");}
$sql1="INSERT INTO `users` (`Username`, `Email ID`, `Passowrd`, `Date`) VALUES ('$usernam','$email','$pass',current_timestamp())";
if(!mysqli_query($conn,$sql1)){die("could not add to tb");}
?>
