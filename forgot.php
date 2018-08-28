<!DOCTYPE html>
<html>
	<head>
	<title> Forgot password</title>


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


<hr>

<br /> <br />
	
	<div>
		<form action="updatepass.php" method="post">
	
	
	
	<table border="1px" align="center">
	
	<div>
		<input type="radio" name="radio" value="faculty"  />Faculty
		<input type="radio" name="radio" value="Student"  />Student
	</div>

	<br/><br />
	

Email:<input type ="email" name="femail" required /><br/><br />
	

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

New Password <input type ="password" name="nname" required /><br /><br />
Re-type Password <input type ="text" name="rptname" required /><br /><br />




			<input type ="submit" name="ssubmit" value="Reset"/> &nbsp
			<input type ="reset" name="passreset" value="Clear"/>
		</form>
	</div>

	<br /> <br />
	
	</table>
	<hr>

</body>
<html>