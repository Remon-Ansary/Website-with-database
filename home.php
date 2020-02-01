<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');

}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Remons creation</title>
    <link rel="stylesheet" type="text/css" href="style3.css">  	
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Home </a></li>
				<li><a href="services.php">Services </a></li>
				<li><a href="#">Gallery </a></li>
				<li><a href="#">About</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>

			<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
			
			
		</div>
	</header>

</body>
</html>