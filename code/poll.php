<!doctype html>
<html>
	<head>
		<title>Polls</title>
	</head>
	
	<body>
	<?php
	session_start();
	$pollid=$_GET['pollid'];
	$connect=mysqli_connect('localhost','root','','Student_hub');
	$query="select * from polls where pollid='$pollid'";
	$q= mysqli_query($connect,$query);
	while($row=mysqli_fetch_array($q))
	{
		$id= $row[0];
		$title=$row[1];
		$pollid = $row[2];
		$stu =$row[3];
		echo"<h1>$title</h1>";
		
		?>
		
		<table>
		<form action="" method"POST">
		<?php
	$question="select * from question where pollid='$pollid'";
	$q2= mysqli_query($connect,$question);
	while($r=mysqli_fetch_array($q2))
	{
		$question= $r[0];
		$votes= $r[2];
		$newvotes = $votes + 1;
		$stu =$_SESSION['us'];
		$newstu = $Student_Id."$stu,";
		
		echo '<tr><td>'.$question.'</td><td><input type="radio" name="polls" value="'.$question.'"/></td></tr>';
	}
	if(isset($_POST['vote'])){
	$polloption=$_POST['polls'];
	if($polloption==""){
		die("u hav nt selected an option.");
		}else
		{
		$stue = explode(",",$student_id);
		if(in_array($stu,Tstue))
		{
		die("Already voted");
		}
		else
		{
		mysqli_query($connect,"update questions set votes= '$newvotes' where pollid='$pollid'");
		mysqli_query($connect,"update polls set Student_id= '$newstu' where pollid='$pollid'");
		die("u voted successfully");
		}
		}
							}
	}
	?>
<tr><td><input type"submit" name="vote" value="vote"/></td></tr>
</form>
</table>
	
	</body>
</html>