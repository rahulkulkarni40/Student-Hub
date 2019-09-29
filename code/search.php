<?php

$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM student WHERE Regno='".$_POST['stu']."'";



$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))

	{
	
	echo"<body style='background-color:#c5ff07'>";

	echo"<link rel='stylesheet' href='create_files/formoid1/formoid-default.css' type='text/css' />";

echo"<script type='text/javascript' src='create_files/formoid1/jquery.min.js'></script>";

echo"<center>";

echo"<form action='faculty.html' class='formoid-default' style='background-color:#fff9fb;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;width:480px' title='Create From' method='post'>";
	
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

	echo"<input type='text' name='ph' value='".$row['Contact']."' readonly/></div>";

	echo"<div class='element-textarea' >";

	echo"<label class='title'>Address</label>";

	echo"<input type='text' name='add'value='".$row['Address']."' readonly></textarea></div>";
	
	
echo"<div class='element-submit' >";

	echo"<input type='submit' value='Back'/></div></form>";

echo"<script type='text/javascript' src='create_files/formoid1/formoid-default.js'></script>";

echo"<p class='frmd'><a href='http://formoid.com/'>Web 2 0 Forms Formoid.com 1.9</a></p></center></body>";

	
}


mysqli_close($con);
?>
