<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'project');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from userlogin where email='$email' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
  $_SESSION['username'] = $name;
  header('location:budgeting.php');
}else{
  header('location:login.php');
}
 ?>
