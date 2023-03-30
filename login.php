<?php
$conn=mysqli_connect("localhost","root","");
if(!$conn){die("Could not connect to databse");}
mysqli_select_db($conn,"soffee");

$email=$_POST['EmailId'];
$pass = $_POST['Password'] ;
if(!isset($email,$pass)){die("not set");}
$eml="SELECT EmailId FROM users WHERE EmailId=$email ;";
$ps="SELECT Password1 FROM users WHERE Password1=$pass ;";

$queryeml=mysqli_query($conn,$eml);
$queryps=mysqli_query($conn,$ps);
echo $queryeml.$queryps;
if($email==$queryeml && $pass==$queryps){
header("Location:Project1/home.html");
}
else{
    echo"<script> alert(Please SignUp before login)</script>";
}

?>