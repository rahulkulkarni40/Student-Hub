<?php
$con=mysqli_connect("localhost","root","","autoinc");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}

	$sql="insert into auto(Id,Qn)values('".$_POST['Id']."','".$_POST['Qn']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('Done');</script>";
		echo "<script>window.location = 'inc1.php';</script>";
	}
mysqli_close($con);
?>