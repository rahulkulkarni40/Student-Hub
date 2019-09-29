<?php

$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
session_start();
	

$sql ="SELECT * FROM student WHERE Regno='".$_SESSION['us']."'";



$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))

	{
	echo"<html>";
	echo"<head><style type='text/css'>";
echo"body {
	text-align:center;
	margin-left:400;
  width: 700px;
  height: 720px;
  align:center;
}";
echo"</style></head>";
	echo"<body style='background-color:#c5ff07' >";
	echo"<link rel='stylesheet' href='create_files/formoid1/formoid-default.css' type='text/css' />";
echo"<script type='text/javascript' src='create_files/formoid1/jquery.min.js'></script>";
echo"<center>";
echo"<form action='spass.php' class='formoid-default' style='background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;width:480px' title='Create From' method='post'>";
echo"<div class='element-text' ><h2 class='title'>Create Account</h2></div>";
	echo"<div class='element-input' >";
	echo"<label class='title'>Full Name</label>";
	echo"<input type='text' maxlength='25' name='fn'  value='".$row['Fullname']."' readonly></div>";
	echo"<div class='element-input' >";
	echo"<label class='title'>Father's Name</label>";
echo"<input type='text' name='fan' value='".$row['Fathers_Name']."'readonly ></div>";
	echo"<div class='element-input' >";
echo"<label class='title'>Register Number</label>";
echo"<input type='text' name='rn' value='".$row['Regno']."'readonly /></div>";
	echo"<div class='element-password' >";
echo"<label class='title'>Password</label>";
echo"<input type='password' name='password' id='pass1' value='' required /></div>";
echo"<div class='element-password' >";
echo"<label class='title'>Confirm Password</label>";
echo"<input type='password' name='password1' onkeyup='checkpass(); return false' id='pass2' value='' required /></div>";
echo"<span id='confirmMessage' class='confirmMessage'></span>";
	echo"<div class='element-email' >";
	echo"<label class='title'>Email</label>";
	echo"<input type='email' name='email' value='".$row['Email']."' readonly /></div>";
	echo"<div class='element-input' >";
echo"<label class='title'>Department</label>";
	echo"<input type='text' name='br' value='".$row['Branch']."'readonly/></div>";
	echo"<div class='element-input' >";
echo"<label class='title'>Semester</label>";
	echo"<input type='text' name='sem' value='".$row['Semester']."' readonly /></div>";
	echo"<div class='element-input' >";
echo"<label class='title'>Phone Number</label>";
	echo"<input type='text' name='ph' pattern='[+]?[\.\s\-\(\)\*\#0-9]{10,}' maxlength='10' value='".$row['Contact']."' readonly/></div>";
	echo"<div class='element-textarea' >";
	echo"<label class='title'>Address</label>";
	echo"<input type='text' name='add'value='".$row['Address']."' readonly></textarea></div>";
echo"<div class='element-submit' >";
	echo"<input type='submit' value='Submit'/></div></form>";
echo"<script type='text/javascript' src='create_files/formoid1/formoid-default.js'></script>";
echo"<p class='frmd'><a href='http://formoid.com/'>Web 2 0 Forms Formoid.com 1.9</a></p></center></body>";
}


mysqli_close($con);
?>
