<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
*{
			all:none;
			-moz-appearance:none;
			-webkit-appearance:none;
		}
.subject{
	margin:10%;
	margin-top:5%;
	border:3px solid red;
	border-radius:5px;
	padding:10px;
	display: inline-block;
}
</style>

<script>
	function hellow(){
		
		var xhttp = new XMLHttpRequest();
		var obj=$('input[type=radio]:checked').val();
		var url='delete.php?id='+obj;
		console.log('Link is '+url);			
				xhttp.onreadystatechange = function() {
			    if(xhttp.readyState == 4 && xhttp.status == 200){
			    	setTimeout(function(){
			    		location.reload();
			    	},0000);
			    	
			    }
			};
			xhttp.open("GET", url, true);
			xhttp.send();
			return false;
		}
</script>	 
</head>
<body>
<?php include 'navigation.php' ?>
<div style='margin-top: 20px'>Choose subject to delete :</div>
<form method='get' onsubmit='return hellow()'>
<div class='subject'>
	<div>Subject names :</div>
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
				        echo "<input type='radio' name='subject' value='".$row["subject_name"]."'>". $row["subject_name"]."<br>";
				    }
				} else {
				    echo "No more subjects left<br>";
				}
				mysqli_close($conn);
				?> 
	<input id='hello' type='submit' name='proceed' value='Proceed' >
</form>
</div>
</body>
</html>

