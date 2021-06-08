<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'project');

$food = $_POST['food'];
$transport = $_POST['transport'];
$utilities = $_POST['utilities'];
$insurance = $_POST['insurance'];
$personal = $_POST['personal'];

  $reg = " insert into spendings(food, transport, utilities, insurance, personal) values('$food' , '$transport' , '$utilities', '$insurance', '$personal')";
  mysqli_query($con, $reg);
  echo "Message Sent";
 ?>
