<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	
	$con = mysqli_connect($server,$username,$password);

if (!$con)
{
	die('connection to this database failed due'. mysqli_connect_error() );
}

// else
// {
// 	echo 'Connected to server';
// }

// if(!mysqli_select_db($con,'bca'))
// {
// 	echo 'Database not found';
// }

// else 
// {
// 	echo 'Database selected';
// }
$flag = false;
if (isset($_POST['fname']))
{
	
	//echo 'Form submitted successfully' ;
	$FirstName = $_POST['fname'];
	$LastName = $_POST['lname'];
	$EnrolNo = $_POST['enrolno'];
	$RollNo = $_POST['rollno'];
	$EmailId = $_POST['email'];
	$Program = $_POST['program'];
	$sql = "INSERT INTO `bca`.`students` (`FirstName`, `LastName`, `EnrolNo`, `RollNo`, `EmailId`, `Program`) VALUES 
	('$FirstName', '$LastName', '$EnrolNo', '$RollNo', '$EmailId', '$Program');";
	
	if (!mysqli_query($con,$sql))
	{
		echo 'Data not inserted';
	}

	else 
	{
		$flag = true;
	}

	$con -> close();

}


?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Create Account</title>

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<style type="text/css">
	
	.f1{
		margin-left: 450px;
		margin-right: 450px;
		margin-top: 0px;
		padding-left: 20px;
		padding-top: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		background-color: rgba(255,0,0,0.3);
	}

</style>

<script type="text/javascript">
	
	function myFunction(){
		alert("Your form has been submitted!");
	}
</script>

</head>
<body style="background-color: pink;">

	<header>
	
		<nav>
			<a href="home page.php">Home</a>
			
		</nav>
	</header>
   
	
	<div class="f1">

<form action="insert.php" method="POST">

	<label>First Name:</label><br>
	<input type="text" name="fname"><br><br>
	<label>Last Name:</label><br>
	<input type="text" name="lname"><br><br>
	<label>Enrolment No.:</label><br>
	<input type="text" name="enrolno"><br><br>
	<label>Roll No.:</label><br>
	<input type="text" name="rollno"><br><br>
	<label>Email Id:</label><br>
	<input type="text" name="email"><br><br>
	<label>Program of Study:</label><br>
	<input type="text" name="program"><br><br>
	<input type="submit" name="submit" value="submit" onclick="myFunction()">

</form>

	<footer>
	
		<p id="footer">@ Copyright 2020. All Rights Reserved. SANA ATHAR || 18CAB418</p>
		
	</footer>

	</div>

</body>
</html>