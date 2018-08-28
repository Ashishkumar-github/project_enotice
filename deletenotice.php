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

$dnotice=$_POST['dname'];

$n=0;
			
			$qn=$conn->query("select notice_id from notice");
			
		
			echo "<table>";
			while($row = mysqli_fetch_assoc($qn)){
				
   				if($dnotice==$row['notice_id'])
				{
					$q=$conn->query("delete from notice where notice_id='$dnotice'");
					echo "<h2>Notice Deleted <a href='facultyhome.html'> home </a></h2>";
					

					$n=1;
				}
			}
			
			
			if($n==0)
			{
				echo "<h2>Notice not found <a href='facultyhome.html'> home </a></h2><br />";
				
				

			}
			
			

?>


</center>

<div class="footer">
  <p>Concept & Design by Ashish(1MV16MCA03) & Raju(1MV16MCA15)</p>
</div>

</body>

</html>