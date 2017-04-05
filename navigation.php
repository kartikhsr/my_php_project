
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
#gju_logo{
	background-color: white;
	position: absolute;
	float: left;
	margin-top: -10px;
}
.nav_bar{
	padding-left: 50px;
	margin-top: 3px;
}
.list_item{
		padding:0px;
	margin:0px;
	float:left;
	color:	#00bfff;
	display: inline-block;
}
.list_item:hover{
	background-color: #C5D2D4;
}
.sub_list{
	padding:4px;
	position: absolute;
	display: none;
}
.list_item:hover .sub_list{
	display: block;
	overflow: hidden;
	background-color: black;
}
.sub_list>ul>li>a{
	display: block;
	width:70px;
}
.sub_list{
	margin-left: -25px;
}
.more{
	float: right;
	margin-right: 15px;
}
.sub{
	margin-left:15%;
}
</style>
 <header>
		<nav>
		<img id='gju_logo' src='gju.png' width='50px' height='50px'>
			<ul class='nav_bar'>
				<li class='list_item'><a href='index.php'>Home</a></li>
				<div class='sub'>
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
				        echo "<li class='list_item' >". $row["subject_name"]. "</li>";
				    }
				} else {	
				    echo "";
				}
				mysqli_close($conn);	
				?>
				</div>
				<li class='list_item '><a href='add_subject.php'>Add_Subject</a></li>
				<li class='list_item '><a href='delete_subject.php'>Delete_Subject</a></li>
				<li class='list_item more'><a href='#'>More</a><span class='caret'></span>
					<div class='sub_list'>
						<ul >
							<li ><a href='#'>Update</a></li>
							<li><a href='#'>Sign out</a></li>
						</ul>
					</div>
				</li>
				<li class='list_item more'><a href='#'>Contacts</a></li>
			</ul>
		</nav>
	</header>