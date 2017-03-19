<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta charset="UTF-8">
		<title>Dog's page</title>
	</head>

	<body>
		
		
	<p>
		
		<form action="koer.php" method="post" enctype="multipart/form-data">
			<table>
				<thead>
					<tr>
						<th>Koera ID</th>
						<th>Koeratõuk</th>
						<th>Koerapilt</th>
						<th>Kirjeldus</th>
					</tr>
				</thead>
				<tr>
					<td><input type="text" name="koeraid"></td>
					<td><input type="text" name="koeratouk"></td>					
					<td><input type="file" name="koerapilt"></td>					
					<td><input type="text" name="kirjeldus"></td>					
				</tr>
			</table>				
			<input type="submit" name="lisa-tabelisse" value="Lisa andmed" />
		</form>
	</p>
	
	<p>
		<form method="GET" action="pilt.php" >
			<input type="submit" name="display_db" value="Näita kõike">
		</form>
	</p>
	

		<script src="myscripts.js"></script>
		
		
	</body>

</html>