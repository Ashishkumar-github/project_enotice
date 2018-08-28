<!DOCTYPE html>
<html>
<head>
	<title>
		Update Password
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

$user=$_POST['radio'];

$femail=$_POST["femail"];

$qn=md5($_POST["question"]);
$shaqn=sha1($qn);

$ans=md5($_POST["aname"]);
$shaans=sha1($ans);

$pass=md5($_POST["nname"]);
$shapass=sha1($pass);




$rpass=md5($_POST["rptname"]);
$sharpass=sha1($rpass);


if($shapass != $sharpass)
{
	echo "Retype password incorrect";
	$rptname="";
	
}

else
	{
		if(isset($user) && $user=="faculty")
		{	
		
			$q=$conn->query("select question,answer from faculty where email='$femail'");

			$row=mysqli_fetch_assoc($q);
		
			
		
			if(($shaqn == $row['question']) && ($shaans == $row['answer']))
			{
			
				$uq=$conn->query("update faculty set password='$shapass' where email='$femail'");
				
				echo "<h2>Password Reset<a href='loginnew.html'> home </a></h2>";

			}
			else
			{
				echo "<h2>Question and Answer doesnot match <a href='facultyhome.html'> home </a></h2>";
			
			}
		}
			else
			{
			
		
				$q=$conn->query("select question,answer from student where email='$femail'");

				$row=mysqli_fetch_assoc($q);
		
		
				if(($shaqn == $row['question']) && ($shaans == $row['answer']))
				{
			
					$uq=$conn->query("update student set password='$shapass' where email='$femail'");
					
					echo "<h2>Password Reset<a href='loginnew.html'> home </a></h2>";

			
				}
				else
				{
				
				echo "<h2>Question and Answer doesnot match <a href='loginnew.html'> home </a></h2>";
			
				}	
			
			
			}	
		
		
	}




?>

</center>

<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>

</html>