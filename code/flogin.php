<?php
session_start();
//Store data into session
//$_SESSION['user']=$_POST['use'];
$use=$_POST['use'];
$pass=$_POST['password'];

$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT Faculty_Id,Password FROM faculty WHERE Faculty_Id='".$use."' ";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1) 
	{
	}else
	{
	echo "<script>alert('Invalid Username/Password');</script>";
	echo'<script>window.location="flogin.html"</script>';
	}
	while($row = mysqli_fetch_array($result))
	{
	if($row['Faculty_Id']==$use && $row['Password']==$pass)
	{
	$_SESSION['id']=$use;
	echo'<script> window.location="faculty.html"</script>';
	}
	else
	{
	echo'<script>window.location="flogin.html"</script>';
	}
}
	mysqli_close($con);
?>
