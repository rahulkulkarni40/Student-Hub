<?php
session_start();
//Store data into session 
$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM faculty WHERE Faculty_Id='".$_POST['fid']."'";



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

echo"<body background='images/img19.jpg'>";



echo"<link rel='stylesheet' href='fcreate_files/formoid1/formoid-default.css' type='text/css' />";

echo"<script type='text/javascript' src='fcreate_files/formoid1/jquery.min.js'></script>";
echo"<form action='fupdat.php' class='formoid-default' style='background-color:#00BFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;width:480px' title='My Formoid form' method='post'>";
echo"<div class='element-text' >";
echo"<h2 class='title'>Create Account</h2></div>";
echo"<div class='element-input' >";
echo"<label class='title'>Faculty Name</label>";
echo"<input type='text' name='fn' readonly value='".$row['Faculty_Name']."'></div>";
echo"<label class='title'>Last Name</label>";
echo"<input type='text' name='fn' readonly value='".$row['Lastname']."'></div>";
echo"<div class='element-input' >";
echo"<label class='title'>Faculty Id</label>";
echo"<input type='text' name='fid' readonly value='".$row['Faculty_Id']."'></div>";
echo"<div class='element-input' >";
echo"<label class='title'>Department</label>";
echo"<input type='text' name='dep' readonly value='".$row['Department']."'></div>";
echo"<div class='element-input' >";
echo"<label class='title'>Contact No</label>";
echo"<input type='text' name='con'  pattern='[+]?[\.\s\-\(\)\*\#0-9]{10,}' maxlength='10' value='".$row['Contact']."'></div>";
echo"<div class='element-email' >";
echo"<label class='title'>Email</label>";
echo"<input type='email' name='email'  value='".$row['Email']."'></div>";
echo"<div class='element-submit' >";
echo"<input type='submit' value='Submit'/></div>";

echo"</form>";
echo"<script type='text/javascript' src='fcreate_files/formoid1/formoid-default.js'></script>";

echo"<p class='frmd'><a href='http://formoid.com/'>Web 2 0 Forms Formoid.com 1.9</a></p>";



echo"</body>";
echo"</html>";
}


mysqli_close($con);
?>