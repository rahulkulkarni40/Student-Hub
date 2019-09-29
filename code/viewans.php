<?php
session_start();
$con=mysqli_connect('localhost','root','','student_hub');

if(mysqli_connect_error())

{
	
	echo"could not connect:".mysqli_connect_error();

}

if(isset($_POST['qid']))
{
	$sql ="SELECT * FROM questioning WHERE Q_id='".$_POST['qid']."'";
	$result=mysqli_query($con,$sql);


	while($row = mysqli_fetch_array($result))
	{
		echo"<html>";
		echo"<head>";
		echo"<meta charset='utf-8' />";
		echo"<title>Answer - Formoid bootstrap form</title>";
		echo"<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
		echo"</head>";
		echo"<body class='blurBg-false' style='background-color:#EBEBEB'>";
		echo"<link rel='stylesheet' href='ans_files/formoid1/formoid-flat-green.css' type='text/css' />";
		echo"<script type='text/javascript' src='ans_files/formoid1/jquery.min.js'></script>";
		echo"<form action='Student.html' class='formoid-flat-green' style='background-color:#FFFFFF;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px' method='post'>";
		echo"<div class='title'><h2>Answer</h2></div>";
		echo"<div class='element-input' ><label class='title'>Question Id</label><input class='large' type='text' name='Q_id' value='".$row['Q_id']."' readonly/></div>";
		echo"<div class='element-textarea' ><label class='title'>Question</label><textarea class='medium' name='question' id='question' cols='20' rows='5' value='".$row['Question']."' readonly ></textarea></div>";
		echo"<script>document.getElementById('question').value='".$row['Question']."';</script>";
		echo"<div class='element-textarea' ><label class='title'>Answer</label><textarea class='medium' id='ans' name='ans' cols='20' rows='5' value='".$row['Answer']."' readonly></textarea></div>";
		echo"<script>document.getElementById('ans').value='".$row['Answer']."';</script>";
		echo"<div class='submit'><input type='submit' value='Back'/></div></form>";

		echo"<script type='text/javascript' src='ans_files/formoid1/formoid-flat-green.js'></script>";
		echo"</body>";
		echo"</html>";
	}

}
mysqli_close($con);
?>