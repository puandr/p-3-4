<?php 
			$host = "localhost";
			$user = "test";
			$pass = "t3st3r123";
			$db = "test";
		

			$l = mysqli_connect($host, $user, $pass, $db);
			mysqli_query($l, "SET CHARACTER SET UTF8") or
					die("Error, ei saa andmebaasi charsetti seatud");
								
			$result = mysqli_query($l, "SELECT * FROM 10162828_andmed");
		
			$table = '10162828_andmed';
			$fields_num = mysqli_num_fields($result);

			$koeratoug= mysqli_real_escape_string($link, $_REQUEST['koeratouk']);
			$koerapilt = mysqli_real_escape_string($link, $_REQUEST['koerapilt']);
			$koera_kirjeldus = mysqli_real_escape_string($link, $_REQUEST['kirjeldus']);
					
			
			//ANDMETE LISAMINE
			$sql = "INSERT INTO 10162828_andmed (data, pilt, kirjeldus) VALUES ('$koeratoug', '$koerapilt', '$koera_kirjeldus')";
			if (mysqli_query($l, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
									
			mysqli_close($l);
			
			echo phpversion();	
			
			
			
			
			
			
			
			echo "<h1>Table: {$table}</h1>";
			echo "<table><tr>";
			// printing table headers
			for($i=0; $i<$fields_num; $i++)
			{
				$field = mysqli_fetch_field($result);
				echo "<td>{$field->name}</td>";
			}
			echo "</tr>\n";
			// printing table rows
			while($row = mysqli_fetch_row($result))
			{
				echo "<tr>";

				// $row is array... foreach( .. ) puts every element
				// of $row to $cell variable
				foreach($row as $cell)
					echo "<td>$cell</td>";

				echo "</tr>\n";
			}
			echo "</table>\n";
			mysqli_free_result($result);	
			
			
		?>