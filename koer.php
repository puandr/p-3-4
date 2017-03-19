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
			
			if( $_POST ) {

				print_r($_FILES);
			
				$imagename=$_FILES['koerapilt']['name'];
				$imagetmp = addslashes (file_get_contents($_FILES['koerapilt']['tmp_name']));
				
				$form_koeraid = $_POST['koeraid'];
				$form_koeratouk = $_POST['koeratouk'];
				$form_pilt = $_POST['koerapilt'];
				$form_kirjeldus = $_POST['kirjeldus'];
				
				//$koeratoug= mysqli_real_escape_string($l, $_REQUEST['data']);
				//$koerapilt = mysqli_real_escape_string($l, $_REQUEST['pilt']);
				//$koera_kirjeldus = mysqli_real_escape_string($l, $_REQUEST['kirjeldus']);	
				
				//ANDMETE LISAMINE
				$sql = "INSERT INTO 10162828_andmed (id, data, pilt, kirjeldus) VALUES ('$form', '$form_koeratouk', '$imagetmp', '$form_kirjeldus')";
				if (mysqli_query($l, $sql)) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
										
				mysqli_close($l);
				
				echo phpversion();			
			
			}
						
			mysqli_free_result($result);	
			
			
?>