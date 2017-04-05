<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
*{
			all:none;
			-moz-appearance:none;
			-webkit-appearance:none;
		}
label{
	width:200px;
}
.container{
	border:3px solid #800000;
	border-radius: 5px;
	padding-left:10px;
}

</style>
	 
</head>
<body>
<?php include 'navigation.php'
?>

<div class='container'>
	<form method='get' action="sample.php">
		<div>
			<label>Subject name : </label>
			<input type='text' name='subject_name'>
		</div>
		<div>
			<label>Subject code : </label>
			<input type='text' name='subject_short_form'>
		</div>
		<div>
			<label>Choose course : </label>
			<select name='course'> 
				<option name='b.tech.'>B.tech.</option>
				<option name='m.tech.'>M.tech.</option>
			</select>
		</div>
		<div>
			<label>Choose stream : </label>
			<select name='stream'> 
				<option name='cse'>CSE</option>
				<option name='ece'>ECE</option>
				<option name='me'>ME</option>
				<option name='printing'>PRINTING</option>
				<option name='it'>IT</option>
			</select>
		</div>
		<div>
			<label>Choose year : </label>
			<select name='year'> 
				<option name='cse'>1st</option>
				<option name='ece'>2nd</option>
				<option name='me'>3rd</option>
				<option name='printing'>4th</option>
			</select>
		</div>
		<div>
			<label>
				
			</label>
			<input type="submit" value="Submit">
		</div>
	 
	</form>	
</div>
</body>
</html>

