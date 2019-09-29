<?php
session_start();

$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}
	

$sql ="SELECT * FROM questioning ";
$result=mysqli_query($con,$sql);
$limit = 1000000;
$count=0;
echo"<html>";
echo"<body <body background='images/img19.jpg'>><center>";
echo"<table border='1' cellspacing='0' cellpadding='5'>";
echo'<script type="text/javascript">';
echo'p{align:"center" color:orange;};';
echo'</script>';
echo"<th><p><center>Question Id.</center></th><th>Question</th><th>Answer</th></p>";
	while($row = mysqli_fetch_array($result))

	{
	$id=$row['Q_id'];
	$SESSION['qid'] = $id;
	$ques=$row['Question'];
	if($count < $limit)
	{
	
		if($count ==0)
		{
			echo"<tr>";
		}
		echo"</tr><tr><td><p><center>$id</center></p></td><td>".$ques."</td><td><a href='del.php?idd=".$id."' style='color:red;'>Delete</a></td> ";
	}
	else
	{
		 $count=0;
		 echo"</tr><tr><td>$id</td><td>$ques</td>";
	}
		 $count++;
	}
		 echo"</tr>";
		 echo"</table>";
		 echo"<form action='add.html'>";
			echo"<input type='submit' value='Back'>";
		 echo"</form></center></body></html>";
?>