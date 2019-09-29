<?php
 
$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
session_start();

$sql ="insert into questioning (Q_id,Faculty_Id,Question,Date,Student_Id) values('".$_POST['Qid']."','".$_POST['fn']."','".$_POST['que']."', CURRENT_TIMESTAMP(),'".
$_SESSION['us']."')" ;
if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Your Facullty will respond you shortly!');</script>";
		echo "<script>window.location = 'Student.html';</script>";
	}
mysqli_close($con);

?>
