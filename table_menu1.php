<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('#Add_subject').click(function(){
		window.location.replace('add_subject.php');
	});
});
</script>
<style>
*{
			all:none;
			-moz-appearance:none;
			-webkit-appearance:none;
		}
article>button{
	margin: 8px;
	width:280px;
	border-radius: 3px;
	background-color: #ffb399;
	border: none;
}
article>button>a{
	display: block;
	text-decoration: none;
	color:#cc3300
}
.matter{			/*matter is for left rectangular box in section part*/
	border:3px solid #800000;	 
	float: left;
	min-height: 290px;
	height:auto;
	border-radius: 5px;
	display:block;
}

</style>
<div class='matter'>
<?php
			 $servername = "127.0.0.1";
				$username = "root";
				$password = "kartik";
				$dbname = "subjects";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
			 $sql = "SELECT subject_name,subject_code FROM subject";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<article>"."<button type='button' name='".$row["subject_name"]."' value='".$row["subject_name"]."'><a href='#'>". $row["subject_name"]. "</a></button>"."</article>";
				    }
				} else {
				    echo "";
				}
				mysqli_close($conn);
				?> 
					<article>
				<button type='button' id='Add_subject' action='add_subject.php'><a href='#'>Add_subject</a></button>
				</article>
			<article>
				<button type='button' id='Subject_name1' disabled><a href='#'>Update_Subject</a></button>
				</article>
			<article>
				<button type='button' id='Subject_name1' disabled><a href='#'>Remove_Subject</a></button>
				</article>
				</div>
			