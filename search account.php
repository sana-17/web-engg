<!DOCTYPE html>
<html>
<head>
	
	<title>Search Account</title>
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
		background-color: rgba(34,139,34,0.5);
	}
</style>


</head>
<body style="background-color: rgb(152,251,152);">
	<header>
	
		<nav>
			<a href="home page.php">Home</a>
			
		</nav>
	</header>
	<div class="f1">
<form action="search result.php" method="post">
	<label>Search by First Name:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<label>Search by Last Name:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<label>Search by Enrolment No.:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<label>Search by Roll No.:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<label>Search by Email Id:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<label>Search by Program of Study:</label><br>
	<input type="text" name="valueToSearch"><br><br>
	<input type="submit" name="submit" value="search">
</form>
	<footer>
	
		<p id="footer">@ Copyright 2020. All Rights Reserved. SANA ATHAR || 18CAB418</p>
		
	</footer>
	</div>
</body>
</html>