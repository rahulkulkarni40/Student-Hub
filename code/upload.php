<?php
session_start();
$id=$_SESSION['id'];
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$sdb=mysql_select_db("Student_hub",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){

  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into upload(name,id,sem)values('$name','$id','".$_POST['sem']."')");
if($insert){
header("location:faculty.html");
}
else{
die(mysql_error());
}
}
?>
<html>
<head>
<title>Upload and Download</title>
</head>
<style>
body{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
a{color:#666;}
#table{margin:0 auto;background:#333;box-shadow: 5px 5px 5px #888888;border-radius:10px;color:#CCC;padding:10px;}
#table1{margin:0 auto;}
</style>
<body background="images/img19.jpg">
<h3><p align="center">Files Upload  And  Download</p></h3>	
<form enctype="multipart/form-data" action="upload.php" name="form" method="post">
<table border="0" cellspacing="0" cellpadding="5" id="table">
<tr>
<th >Chosse Files</th>
<td ><label for="photo"></label>
<input type="file" name="photo" id="photo" /></td>
</tr>
<th>Semester</th><th><input type="text" name="sem" required>
</th>

<tr>
<th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
</tr>
</table>
</form>
<br />
<br />
<table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
<th><td align="center">Click to Download</td></th>
<tr>
<td><center>Semester</center></td>
<td align="center">File Name</td></tr>
<?php
$select=mysql_query("select * from upload order by sem asc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
	$sem=$row1['sem'];
?>

<tr>
<td> <center><?php echo $sem;?></center></td>
<td width="300">
<img src="tick.png" width="14" height="14"><a href="download.php?filename=<?php echo $name;?>"><?php echo $name ;?></a>
</td>
</tr>
<?php }?>
</table>
<center><a href="faculty.html" ><input type="button" value="back" ></a></center>
</body>
</html>