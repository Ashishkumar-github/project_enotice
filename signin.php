<!DOCTYPE html>

<html>
	<head>

	<title>Login</title>

	<style>
	html { 
		background: url(banner.png) no-repeat center fixed  ; 
		background-size: cover;
	}
	
	h1{
		color:white;
		text-align:center;
	}
	h2{
		color:red;
		text-align:center;
		
	}
	a:link{
		
		text-decoration:none;
	}
	a{
		
		color:white;
	}
	a:hover {
		text-decoration: underline;
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


<?php 

include 'db.php';

$uname=$_POST['uname'];
$pwd=md5($_POST['pwd']);
$shapwd=sha1($pwd);


$user=$_POST['radio'];


if(isset($user) && $user=="faculty")
{

$q=$conn->query("select password from faculty where email='$uname'");

$row=mysqli_fetch_assoc($q);

//echo $row['password'];
	
if($shapwd == $row['password']) 
{
	
	//echo "login success";
	include 'facultyhome.html';
	//echo "<a href='facultyhome.html'></a>";
}
else
{
	
	echo "<h2>login failed <a href='loginnew.html'>re-login</a></h2>";
	
}

}
else
{
	
	$q=$conn->query("select password from student where email='$uname'");
	
	$row=mysqli_fetch_assoc($q);
	

if($shapwd == $row['password'])
  
{
	
	
	include "studenthome.html";
	
	
}

else
{
	
	echo "<h2>login failed <a href='loginnew.html'>re-login</a></h2>";
	
}
		
}

?>
<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>
</body>
</html>
