<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Questions - Formoid bootstrap form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB"  background="images/img19.jpg">

<br><br><br><br><br><br><br>

<!-- Start Formoid form-->
<link rel="stylesheet" href="ques_files/formoid1/formoid-flat-green.css" type="text/css" />
<script type="text/javascript" src="ques_files/formoid1/jquery.min.js"></script>
<form action="ques.php" class="formoid-flat-green" style="background-color:#00BFFF;font-size:14px;font-family:'Lato', sans-serif;color:#ffffff;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Questions</h2></div>
	<div class="element-input" ><label class="title">Question Id</label><input type="text" name="Qid" id="Qid" autocomplete="off" style="background-color:#00BFFF"/></div>
	<div class="element-input" ><label class="title">Faculty Id</label><input class="large" type="text" name="fn" id="fn" style="background-color:#00BFFF"/></div>
	<div class="element-textarea" ><label class="title">Question</label><textarea class="medium" name="que" id="que" cols="20" rows="5" style="background-color:#00BFFF"></textarea></div>

<div class="submit"><input type="submit" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/">bootstrap form</a> Formoid.com 2.4</p>

<script type="text/javascript" src="ques_files/formoid1/formoid-flat-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>
<?php

$con=mysql_connect("localhost","root","");
$db = mysql_select_db("Student_hub");
	if(!$db) {
		die("Unable to select database");
	}

$qry="select Q_id from questioning order by Q_id desc limit 1";
$res=mysql_query($qry);

if($res)
{
	$result=mysql_fetch_array($res);
	$val = $result[0]+1;
	echo"<script>document.getElementById('Qid').value='".$val."';</script>";
}
?>