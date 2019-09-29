<?php
$con=mysqli_connect('localhost','root','','student_hub');
if(mysqli_connect_error())
{
	echo"could not connect:".mysqli_connect_error();
}
	$sql="update student set Address='$_POST[add]',Email='$_POST[email]',Semester='$_POST[sem]',Contact='$_POST[ph]' where Regno='".$_POST['rn']."'";
	$result=mysqli_query($con,$sql);
		echo'<script type="text/javascript">';
	echo'alert("Account has been successfully Updated")';
	echo'</script>';
	echo'<script>window.location="add.html"</script>';
mysqli_close($con);
	?>