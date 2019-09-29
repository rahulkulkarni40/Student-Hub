<?php
$use=$_POST['use'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT Username,Password FROM admin WHERE Username='".$_POST['use']."' ";
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) == 1) 
	{
	}else
	{
	echo "<script>alert('Invalid Username/Password');</script>";
	echo'<script>window.location="adlogin.html"</script>';
	}
	while($row = mysqli_fetch_array($result))
	{
	if($row['Username']==$use && $row['Password']==$pass)
	{
	echo'<script> window.location="add.html"</script>';
	}
	else
	{
	echo'<script>window.location="adlogin.html"</script>';
	}
}
	mysqli_close($con);
?>
