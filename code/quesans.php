<?php
session_start();
if(!isset($_SESSION['id']))
{
echo"<script>alert('Login to access this page'); window.location = 'index.html';</script>";
}
else{
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
echo"<th><p><center>Event Id.</center></th><th>Event Name</th><th>Event date</th></p>";
	while($row = mysqli_fetch_array($result))

	{
	$id=$row['E_id'];
	$en=$row['Event_namename'];
	$ed=$row['Event_date'];
	
	if($count < $limit)
	{
	
		if($count ==0)
		{
			echo"<tr>";
		}
		echo"</tr><tr><td><p><center>$id</center></p></td><td>".$en."</td><td>".$ed."<td><a href='ans.php?idd=".$id."' style='color:red;'>View</a></td> ";
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

		 echo"</center></body></html>";
}?>