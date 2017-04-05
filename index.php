<! DOCTYPE html>
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
header{
	margin-top: 2%;
	width: 100%;
}

ul{
	list-style: none;
	border-bottom:2px solid black;
	padding:0px;
	overflow: hidden;
	display:block;
}
a{
	text-decoration:none;
	color:	#00bfff;
	padding:5px;
}
.ucic{
	float: right;
}
.vc{
	margin-top: 6px;
	margin-left: 50px;
	border-radius: 50%;	
}
footer{
	display:block;
	width: 100%;
	padding:10px;
	background-color:black;
}


footer>div>button{
	padding:10px;
	margin-left:10px;
	margin-right: 10px;
}
footer>div{
	display: inline-block;
}

p{
	color:#CEBDBD;
}

section{
	display: block;
	height: 450px;
	margin-left:5%;
	margin-right: 5%
}

.profile,.news{		/*This is for middle and right part*/
	
	padding-left:10px;
	padding-right:10px;
	border:3px solid #800000;
	display:inline-block;
	border-radius: 5px;
	margin-left: 15px;
}
.profile{
	float:right;
}

.news{
	
	margin-left:20%;
}
.profile>div>p,.news>div>p{
	text-align: center;
	color:black;
}
</style> 
</head>
<body>
	<?php include 'navigation.php' ?>
	
	<hr>
	<section>
			<?php include 'table_menu1.php' ?> 
		<div class='news'>
			<div>
				<p>Latest News</p>
				<p><span>Updates</span></p>
				</div>
			</div>
		<div class='profile'>
			<img class='vc' src='vc.jpg' alt='Teacher image' width='100px' height='100px'>
			<div>
			<?php
			 $servername = "127.0.0.1";
				$username = "root";
				$password = "kartik";
				$dbname = "subjects";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT login_id, name, email,post,department,contact FROM profile";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<p>Login id : <span>".$row['login_id']."</span></p>".
				        '<p>Name : <span>'.$row['name']."</span></p>".
				        '<p>Post : <span>'.$row['post']."</span></p>".
				        '<p>Department : <span>'.$row['department']."</span></p>".
				        '<p>Contact : <span>'.$row['contact']."</span></p>".
				        '<p>Email : <span>'.$row['email']."</span></p>";
										    	
				    }
				} else {
				    echo "";
				}
				mysqli_close($conn);
				?>
				<p>Department :<span>VC Office</span></p>
				</div>
			</div>
	</section>
	<footer>
		<div>
			<p><i>Important Links :</i></p>
			<button type='button' name='GJUST'><a href='#'>GJUS&T</a></button>
			<button type='button' name='Departments'><a href=''>Departments</a></button>
			<button type='button' name='Journals'><a href=''>Research Journals</a></button>
			<button type='button' name='Staff'><a href=''>Staff Support</a></button>
		</div>
		<div class='ucic'>
			<p><i>Developed By:</i></p>
			<p>UCIC, GJUS&T</p>
		</div>
	</footer>
</body>
</html>