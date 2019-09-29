<?php
session_start();

$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM feedback ";
$result=mysqli_query($con,$sql);
$limit = 1000000;
$count=0;
echo"<html>";
echo"<body <body background='images/img19.jpg'>><center>";
echo"<table border='1' cellspacing='0' cellpadding='5'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:orange;};';
echo'</script>';
echo"<th><p>Id</th><th><center>Sudent Id.</center></th><th>Faculty Name</th><th>Comments</th></p>";
	while($row = mysqli_fetch_array($result))

	{
		$id=$row['id'];
	$sid=$row['Student_Id'];
	$SESSION['qid'] = $id;
	$ques=$row['Faculty_Name'];
	$fed=$row['Feedback'];
	
		echo"</tr><tr><td><p><center>".$id."</center></p></td><td>".$sid."</td><td>".$ques."</td><td>".$fed."</td><td><a href='del1.php?idd=".$id."' style='color:red;'>Delete</a></td> ";
	
	
	} echo"</tr>";
		 echo"</table>";
		 echo"<form action='add.html'>";
			echo"<input type='submit' value='Back'>";
			 echo"</form></center></body></html>";
?>