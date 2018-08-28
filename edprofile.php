<!DOCTYPE html>
<html>
<head>
		<title>
		Edit profile
		</title>

	<style>
	
	html { 
		background: url(banner.png) no-repeat center fixed  ; 
		background-size: cover;
	}
	
	th {
		background-color: #32CD32;
		color: white;
		padding: 15px 32px;
		border-radius: 4px;
	}
	
	
	table{
		font-size:20px;
	}
	
	input[type=submit],input[type=reset] {
		background-color:#32CD32;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
   
	}
	h1{
		color:white;
		text-align:center;
	}
	input[type=reset] {
		float:right;
	}
	img{
		position:absolute;
		top:0px;
		left:25px;
		
	}
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		color: red;
		text-align: center;
	}

	</style>		
</head>

<body>
<img src="logo.jpg" width="150" height="112">

<h1>e-NoticeBoard</h1>

<?php

include 'db.php';


$edmail=$_POST['edmail'];

$edfname=$_POST['edfname'];
$edlname=$_POST['edlname'];



$edpass=md5($_POST['edpass']);
$edpass1=sha1($edpass);


$edrpass=md5($_POST['edrpass']);
$edpass2=sha1($edrpass);



$question=md5($_POST['question']);
$question1=sha1($question);

$edaname=md5($_POST['edaname']);
$edaname1=sha1($edaname);

if($edpass1==$edpass2)
{
	$q=$conn->query("update faculty set first_name='$edfname',last_name='$edlname',password='$edpass1',question='$question1',answer='$edaname1' where email='$edmail'");
	
	echo "Account updated";
}
	else
{
	echo "password not match";
}


?>
<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>
</html>
