<?php
				$servername = "127.0.0.1";
				$username = "root";
				$password = "kartik";
				$dbname = "subjects";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				$sub_name=$_GET['subject_name'];
				$sub_code=$_GET['subject_short_form'];
				$course=$_GET['course'];
				$stream=$_GET['stream'];
				$year=$_GET['year'];
				/*$ovj = json_decode(file_gets_content("php://input"));*/
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}			
				$sql = "INSERT INTO subject (subject_name, subject_code, course, stream, year)
				VALUES ('$sub_name', '$sub_code', '$course', '$stream', '$year')";

				if (mysqli_query($conn, $sql)) {
					echo '<meta http-equiv = "refresh" content="0;URL=\'add_subject.php\'" />';
					//die();
				    echo "New record created successfully";
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				
				mysqli_close($conn);
				
				?>