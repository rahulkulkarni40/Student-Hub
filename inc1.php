
<html>
<head></head>
<body>
<form name="myForm" action="inc.php" method="POST">

Qno:<input type="text" name="Id" id="unique" autocomplete="off"/>
<br>
Qsn:<input type="text" name="Qn" required="required" autocomplete="off"/>
<br>
<input type="submit" value="Submit"/>
</form>
</html>
</body>
<?php
$con=mysql_connect("localhost","root","");
$db = mysql_select_db("autoinc");
	if(!$db) {
		die("Unable to select database");
	}

$qry="select Id from auto order by Id desc limit 1";
$res=mysql_query($qry);

if($res)
{
	$result=mysql_fetch_array($res);
	$val = $result[0]+1;
	echo"<script>document.getElementById('unique').value='".$val."';</script>";
}
?>