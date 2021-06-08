<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'project');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

  $reg = " insert into contactus(name , email , subject, message) values('$name' , '$email' , '$subject', '$msg')";
  mysqli_query($con, $reg);
  echo "Message Sent";
 ?>
