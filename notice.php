<!DOCTYPE html>
<html>
<head>
	<title>
		notice
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
	
	table{
		
		position:absolute;
		top:100px;
		width: 100%;
	}
	h2{
		color:red;
		text-align:center;
	}
	
	
	</style>
	
	
</head>
<body>
<img src="logo.jpg" width="150" height="112">

<h1>e-NoticeBoard</h1>



<center>

<?php


include 'db.php';

$noticeid=$_POST['noticeid'];
$noticedt=$_POST['noticedate'];
$notice=$_POST['taname'];



if(isset($noticeid)&&  isset($noticedt) && isset($notice) && !empty($noticeid) &&  !empty($noticedt) && !empty($notice) )
	{
			$n=0;
			
			$qn=$conn->query("select notice_id from notice");
			
			echo "<table>";
			
			while($row = mysqli_fetch_assoc($qn)){
				
   				if($noticeid==$row['notice_id'])
				{
					echo "<tr><th><h2>notice already exists</h2><th></tr>";
					echo "<tr><th><h2><a href='facultyhome.html'> home </a></h2><th></tr>";
					$n=1;
				}
			}
			
			
			if($n==0)
			{
				$q=$conn->query("insert into notice values('$noticeid','$noticedt','$notice')");
				echo '<tr><th><h2>notice sent</h2><th></tr>';
				echo "<tr><th><h2><a href='facultyhome.html'> home </a></h2><th></tr>";
			}
			
			echo "</table>";	
	 }
			
			



?>
</center>

<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>

</html>