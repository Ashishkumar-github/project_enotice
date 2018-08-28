<!DOCTYPE html>
<html>
	<head>
		<title>
			Faculty Home Page
		</title>
	
	
	
	
	</head>
<body>


<div>
	
	
	<button >
			Delete
	</button> &nbsp
	
	
	<button>
		<a href="eprofile.php">Edit profile</a>	
	</button>&nbsp
	
	<button>
		<a href="loginnew.html">SignOut</a>
	
	</button>

	
</div>


<hr >

<table border="0">

<form action="notice.php" method="POST">


<div>
	<tr><td><input type="checkbox" name ="checkall" value="All" checked="checked"/>All</td></tr><br/>

</div>

<tr> <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td></tr>

<div>
	<tr><td colspan="2"> Semester <select name="semester">
	<option>I</option>	
	<option>II</option>
	<option>III</option>
	<option>IV</option>
	<option>V</option>
	<option>VI</option>
	</select></td></tr>

</div>


<tr> <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td></tr>

<tr><td colspan="2">Notice Id <input type="text" name="noticeid" required /></td></tr>


<tr> <td bgcolor="#FFFFFF" colspan="2">&nbsp;</td></tr>

<div>
	
	<tr><td>Notice</td></tr>
	<tr><td><textarea  name="taname"  rows="10" cols="100" required />
	</textarea></td></tr>

</div>

<tr><td bgcolor="#FFFFFF" colspan="2">&nbsp;</td></tr>


<tr><td> 
			<button name="attach"> Attach file</button>
</td></tr>

<tr><td bgcolor="#FFFFFF" colspan="2">&nbsp;</td></tr>

<tr><td>

	<form action="notice.php" method="POST">
	<input type ="submit" value="Send">
	</form>

	&nbsp;

	<input type ="submit" value="Email">

</td></tr>




<hr>

</body>

</html>