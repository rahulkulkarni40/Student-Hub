<?php
$use=$_POST['user'];
$pass=$_POST['password'];
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql ="SELECT Regno,Password FROM student WHERE Regno='".$_POST['user']."' ";
	$result=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
	if($row['Regno']==$use && $row['Password']==$pass)
	{
	echo'<script> window.location="Student.html"</script>';
	}
	else
	{
	echo'<script>window.location="login.html"</script>';
	}
}
	mysqli_close($con);
?>
