<?php
$con=mysqli_connect("localhost","root","","internals");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}




	$sql="insert into internals(internal,usn,name,sub1,sub2,sub3,sub4,sub5,sub6,sub7,sub8,sem)values('".$_POST['internal']."','".$_POST['usn']."','".$_POST['name']."','".$_POST['sub1']."','".$_POST['sub2']."','".$_POST['sub3']."','".$_POST['sub4']."','".$_POST['sub5']."','".$_POST['sub6']."','".$_POST['sub7']."','".$_POST['sub8']."','".$_POST['sem']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Added successfully!');</script>";
		echo "<script>window.location = 'internal.html';</script>";
	}



mysqli_close($con);
?>