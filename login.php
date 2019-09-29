<?php
session_start();
//Store data into session
$_SESSION['us']=$_POST['use'];
$use=$_POST['use'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT Regno,Password FROM student WHERE Regno='".$_POST['use']."' ";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1) 
	{
	}else
	{
	echo "<script>alert('Invalid Username/Password');</script>";
	echo'<script>window.location="login.html"</script>';
	}
	while($row = mysqli_fetch_array($result))
	{
	
	if($row['Regno']==$use && $row['Password']==$pass)
	{
	echo'<script> window.location="Student.html"</script>';
	}
	else
	{
	echo'<script>alert("Invalid Password");</script>';
	echo'<script>window.location="login.html"</script>';
	
	}
	
}
	mysqli_close($con);
?>
