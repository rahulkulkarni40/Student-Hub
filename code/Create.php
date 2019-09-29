<?php
$con=mysqli_connect("localhost","root","","student_hub");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}

$passs1 = $_POST['password'];
$passs2 = $_POST['password1'];


if($passs1==$passs2 )
{
	$sql="insert into student(Fullname,Fathers_Name,Regno,Branch,Semester,Address,Contact,Email,Password,Lastname)values('".$_POST['fn']."','".$_POST['fan']."','".$_POST['rn']."','".$_POST['dep']."','".$_POST['sem']."','".$_POST['add']."','".$_POST['ph']."','".$_POST['email']."','".$_POST['password']."','".$_POST['ln']."')";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		echo "<script>alert('registered successfully!');</script>";
		echo "<script>window.location = 'add.html';</script>";
	}
}

else
{
	print "<script type=\"text/javascript\">"; 
	print "alert('The both passwords you have entered do not match!! ')"; 
	print "</script>"; 
	echo '<script>history.go(-1); </script>';
	
}
mysqli_close($con);
?>
