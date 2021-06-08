<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'project');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from userlogin where email='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
  echo "Email Already Taken!";
}else{
  $reg = " insert into userlogin(name , email , password) values('$name' , '$email' , '$pass')";
  mysqli_query($con, $reg);
  echo "Registration Successful";
}
 ?>
