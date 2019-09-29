<?php
session_start();
$pass1=$_POST['password'];
$pass2=$_POST['password1'];

if($pass1 == $pass2)
{
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update faculty set Password='$_POST[password]' where Faculty_id='".$_POST['fid']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Password has been successfully Changed")';
	echo'</script>';
	echo'<script>window.location="faculty.html"</script>';
}
	else
	{
	
	echo'<script type="text/javascript">';
	echo'alert("please enter same password")';
	echo'</script>';
	echo'<script>window.location="fchange.php"</script>';
	}

?>