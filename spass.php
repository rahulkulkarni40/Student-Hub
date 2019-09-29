<?php
session_start();
$pass1=$_POST['password'];
$pass2=$_POST['password2'];

if($pass1 == $pass2)
{
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update student set Password='$_POST[password]' where Regno='".$_SESSION['us']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Password has been successfully Changed")';
	echo'</script>';
	echo'<script>window.location="Student.html"</script>';

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