<!DOCTYPE html>
<html>
	<head>
		<title>
				SignUp
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

<form action ="register.php" method="post">

<div>
	<input type="radio" name="radio" value="faculty" id="faculty" />Faculty
	<input type="radio" name="radio" value="Student" id="Student" />Student
</div>
<br />



FirstName <input type="text" name="fname" required /> &nbsp 
LastName <input type="text" name="lname"><br /><br />

Email <input type="email" name="email" required><br /><br />

Password <input type ="password" name="spass" required /><br /><br />
Re-type Password <input type ="text" name="srpass" required /><br /><br />

Question <select name="question">
		<option>What was your childhood name</option>
		<option>What was your first vehicle</option>
		<option>What is your dream</option>
		<option>Who is your favourite actor</option>
		<option>Who is your favourite singer</option>
		<option>What is your unique id number</option>
	</select>
<br /><br />

Answer <input type ="text" name="aname" required /><br /><br />




</div>
	
	<div>
		<input type ="submit" name="ssubmit" value="SignUp"/> &nbsp
		<input type ="reset" name="sreset" value="Clear"/>
	</div>
</form>	

</body>

</html>