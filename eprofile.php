<!DOCTYPE html>
<html>
<head>
		<title>
		Edit profile
		</title>
		
		
		
	<link rel="stylesheet" type="text/css" href="allpage.css">


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

<form action="edprofile.php" method="POST">

Email <input type="email" name="edmail" required /><br /><br />


FirstName <input type="text" name="edfname" required /> &nbsp; 
LastName <input type="text" name="edlname"><br /><br />



Password <input type ="password" name="edpass" required /><br /><br />
Re-type Password <input type ="text" name="edrpass" required /><br /><br />

Question <select name="question">
		<option>What was your childhood name</option>
		<option>What was your first vehicle</option>
		<option>What is your dream</option>
		<option>Who is your favourite actor</option>
		<option>Who is your favourite singer</option>
		<option>What is your unique id number</option>
	</select>
<br /><br />

Answer <input type ="text" name="edaname" required /><br /><br />




</div>
	
	<div>
	
		<input type ="submit" name="edsubmit" value="Submit"/> &nbsp;
		<input type ="reset" name="edreset" value="Clear"/>
		
	
	</div>
</form>
</body>
</html>
