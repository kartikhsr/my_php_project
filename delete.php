				
	<?php
			 $servername = "127.0.0.1";
				$username = "root";
				$password = "kartik";
				$dbname = "subjects";
				$ids=$_GET['id'];
				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
				echo $ids;
				$sql = "DELETE FROM subject WHERE subject_name='$ids'";
				$result = mysqli_query($conn, $sql);
				if (($result)) {
					echo '<meta http-equiv = "refresh" content="0;URL=\'delete_subject.php\'" />';
				    echo "record deleted";
				    }
				else {
				    echo "error";
				}
				mysqli_close($conn);
				?>