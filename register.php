<!DOCTYPE html>
<html>
	<head>
	<title>Register</title>

<style>
	
	html { 
		background: url(banner.png) no-repeat center fixed  ; 
		background-size: cover;
	}
	
	th {
		background-color: #32CD32;
		color: white;
		padding: 12px 20px;
		border-radius: 4px;
	}
	
	
	table{
		font-size:20px;
	}
	
	input[type=submit],input[type=reset] {
		background-color:#32CD32;
		color: white;
		padding: 15px 32px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
   
	}
	input[type=reset]{
		float:right;
	}
	
	h1{
		color:white;
		text-align:center;
	}
	
	
	h2{
		color:red;
		text-align:center;
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

<br><br><br><br>

<?php

include "db.php";

$user=$_POST["radio"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];




$pass=md5($_POST["spass"]);
$shapass=sha1($pass);

$rpass=md5($_POST["srpass"]);
$sharpass=sha1($rpass);


$qn=md5($_POST["question"]);
$shaqn=sha1($qn);



$ans=md5($_POST["aname"]);
$shaans=sha1($ans);

if(!empty($user)&&!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($shapass) && !empty($sharpass) &&!empty($shaqn)&&!empty($shaans))

	{
		


		if (isset($user) && $user=="faculty")
			{

				$q=$conn->query("insert into faculty values('$fname','$lname','$email','$shapass','$shaqn','$shaans')");

				if($q) 
					{
    
						
						echo "<h2>Account created<a href='loginnew.html'> home </a></h2>";

					}

					else
					{
						
						echo "<h2>Account not created <a href='loginnew.html'> home </a></h2>";

	
					}
			}

				else
				{
					$q=$conn->query("insert into student values('$fname','$lname','$email','$shapass','$shaqn','$shaans')");


					if($q) 
						{
    
							echo "<h2>Account created<a href='loginnew.html'> home </a></h2>";

						}
						else
						{
							echo "<h2>Account not created <a href='loginnew.html'> home </a></h2>";
	
						}	
	
	
				}
	}

	else
		{
		
			echo "Enter all fields";
	
	
		}

?>



<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>
</html>
