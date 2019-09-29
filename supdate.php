<?php

$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
session_start();
	

$sql ="SELECT * FROM student WHERE Regno='".$_POST['reg']."'";



$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))

	{
	echo"<!DOCTYPE html>";
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
	echo"<meta charset='utf-8' />";
	echo"<title>Student Update</title>";
	echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	echo"</head>";
echo"<body class='blurBg-false' background='images/img19.jpg'>";
echo"<link rel='stylesheet' href='n_files/formoid1/formoid-flat-green.css' type='text/css' />";
echo"<script type='text/javascript' src='n_files/formoid1/jquery.min.js'></script>";
echo"<form action='supdat.php' class='formoid-flat-green' style='background-color:#00BFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px'  method='post' >";
echo"<div class='title'><h2>Student Update</h2></div>";
	echo"<div class='element-name' ><label class='title'>FirstName</label><span class='nameFirst'><input  type='text' size='40' name='fn' required/></div>";
	echo"<div class='element-name' ><label class='title'>Father's Name</label><span class='nameLast'><input type='text' size='40' name='fan'  required/></span></div>";
	echo"<div class='element-name' ><label class='title'>LastName</label><span class='nameFirst'><input  type='text' size='40' name='ln' required/></div>";
	echo"<div class='element-input' ><label class='title'>Register number</label><input class='large' type='text' name='rn' /></div>";
	echo"<div class='element-input' ><label class='title'>Department</label><input class='large' type='text' name='dep'  required /></div>";
	echo"<div class='element-input' ><label class='title'>Semester</label><input class='large' type='text' name='sem'  required/></div>";
	echo"<div class='element-email' ><label class='title'>Email</label><input class='large' type='email' name='email' value=''  required/></div>";
	echo"<div class='element-number' ><label class='title'>Conatct</label><input class='large' type='text' min='0' pattern='[+]?[\.\s\-\(\)\*\#0-9]{10,}' maxlength='10' name='ph'  value=''required/></div>";
	echo"<div class='element-textarea' ><label class='title'>Address</label><input type='text' class='medium' name='add' required></textarea></div>";
echo"<div class='submit'><input type='submit' value='Submit'/></div></form><p class='frmd'><a href='http://formoid.com/'>contact form</a> Formoid.com 2.4</p>";
echo"<script type='text/javascript' src='n_files/formoid1/formoid-flat-green.js'></script>";
echo"</body>";
echo"</html>";
}


mysqli_close($con);
?>