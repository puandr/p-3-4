<?php 
			$host = "localhost";
			$user = "test";
			$pass = "t3st3r123";
			$db = "test";		

			$l = mysqli_connect($host, $user, $pass, $db);
			mysqli_query($l, "SET CHARACTER SET UTF8") or
					die("Error, ei saa andmebaasi charsetti seatud");
								
			$result = mysqli_query($l, "SELECT * FROM 10162828_andmed WHERE id=200");
			
			$sql = "SELECT * FROM 10162828_andmed WHERE id=200";
		
			$table = '10162828_andmed';
			$fields_num = mysqli_num_fields($result);

			//$row = mysqli_fetch_array($result) or die("not working");
			//$s=$row['pilt'];
			//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['pilt'] ).'"/>';
			//echo '<img src="data:image/jpeg;base64,'.base64_encode( $s).'"/>';
			
			//print_r($s);
			//echo '<img src="data:image/jpeg;base64,'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';
			
			$sth = $l->query($sql);
			$result2=mysqli_fetch_array($sth);
			//print_r($result2);
			echo '<img src="data:image/jpeg;charset=utf-8;base64,'.base64_encode( $result2['pilt'] ).'"/>';
			
			/*
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
			*/
			
			mysqli_free_result($result);	
			
?>