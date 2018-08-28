<!DOCTYPE html>
<html>
<head>
	<title>
		Update Profile
	</title>

	<style>
	
	html { 
		background: url(banner.png) no-repeat center fixed  ; 
		background-size: cover;
	}
	
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		color: red;
		text-align: center;
	}
	
	h1{
		color:white;
		text-align:center;
	}
	
	img{
		position:absolute;
		top:0px;
		left:25px;
		
	}
	
	
	h2{
		color:red;
		
		position:absolute;
		top:100px;
		width: 100%;
	}
	
	
	</style>
	
	
</head>
<body>
<img src="logo.jpg" width="150" height="112">

<h1>e-NoticeBoard</h1>

<center>

<?php

include 'db.php';


$edsmail=$_POST['edsmail'];

$edsfname=$_POST['edsfname'];
$edslname=$_POST['edslname'];

$edspass=md5($_POST['edspass']);
$edspass1=sha1($edspass);


$edsrpass=md5($_POST['edsrpass']);
$edspass2=sha1($edsrpass);



$squestion=md5($_POST['squestion']);
$squestion1=sha1($squestion);

$edsaname=md5($_POST['edsaname']);
$edsaname1=sha1($edsaname);

if($edspass1==$edspass2)
{
	$q=$conn->query("update student set first_name='$edsfname',last_name='$edslname',password='$edspass1',question='$squestion1',answer='$edsaname1' where email='$edsmail'");
	
	echo "<h2>Account updated <a href='facultyhome.html'> home </a></h2>";
	

}
	else 				
{
	echo "<h2>password not match <a href='facultyhome.html'> home </a></h2>";
}


?>

</center>

<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>

</html>