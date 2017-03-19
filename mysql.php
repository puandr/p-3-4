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
			
			$sql = "INSERT INTO 10162828_andmed (id, data) VALUES (999, 'Anton')";
			if (mysqli_query($l, $sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$sql2 = "INSERT INTO 10162828_andmed (id, data) VALUES (777, 'Andrei')";
			if (mysqli_query($l, $sql2)) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
			}
						
			mysqli_close($l);
			
			echo phpversion();	
			
			
		?>