<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta charset="UTF-8">
		<title>Hello there</title>
	</head>

	<body>
		<h1>Hi there!</h1>
		<p><img alt= "esimene pilt" src="images/pilt.jpg"></p>
		
		<h1>The End!!! !!!!</h1>
		
	<p>
		<form method="post">
			<input type="submit" name="lisa-tabelisse" action="mysql.php" value="Lisa andmed" />
		</form>
	</p>
	
	<p>
		<form method="post">
			<input type="submit" name="kustuta-tabelist" value="Kustuta andmed" />
		</form>
	</p>

		
	<?php 
include 'mysql.php';
?> 
		
		<script src="myscripts.js"></script>
		
		
	</body>

</html>