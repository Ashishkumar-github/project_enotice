<!Doctype html>
<html>
<head>
		<title>
				Student Home page
		</title>

		
		
	

	<style>
	
	th {
    background-color: #4CAF50;
    color: white;
}
	
	
	table{
	
	font-size:20px;
	}
	
	
	</style>
		
		
		
		
		
		</head>

<body>


<div>
	
		<button>
		
			<a href="eprofilestu.html">Edit profile</a>
		</button> 
	
	
	&nbsp

	<button>
		<a href="loginnew.html">SignOut</a>
	</button>

	
</div>





<br /><br />

<hr>

<br /><br />



<label name="snotice" rows="10" cols="1000">


<?php

include 'db.php';


$q=$conn->query("select * from notice");

echo '<table border="1px" align="center">
	  <tr><th>Notice Id</th><th>Notices</th></tr>';
	 

while($row = mysqli_fetch_assoc($q)){
   

	 
	echo '<tr><td>'.$row['notice_id'].'</td>';
	 
	echo '<td>'.$row['notices'].'</td></tr>';
	 
	 echo "<br>";
	 
	 }

echo '</table>';
?>



</label>

<br /><br />

<hr>

<label align="center ">e-Notice</label>


</body>

</html>