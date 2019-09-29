<?php
session_start();
 
$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}

$sql ="insert into feedback (Faculty_Name,Feedback,Student_id) values('".$_POST['fn']."','".$_POST['com']."','".$_SESSION['us']."')" ;
if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Thanks for Feedback!');</script>";
		echo "<script>window.location = 'Student.html';</script>";
	}
mysqli_close($con);

?>
