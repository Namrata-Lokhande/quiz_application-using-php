<?php
session_start();
include "connection.php";
if (isset($_SESSION['admin'])) {
	header("location: adminhome.php");
}
if (isset($_POST['password']))  {
	$password = mysqli_real_escape_string($conn , $_POST['password']);
	$adminpass =" adminpass123";
	if (password_verify($password , $adminpass)) {
		$_SESSION['admin'] = "adminpass123";
		header("Location: adminhome.php");
	}
	else {
		echo  "<script> alert('wrong password');</script>";
	}
}
?>
<html>
	<head>
		<title>PHP-Quiz</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP-Quiz</h1>
				<a href="index.php" class="start">Home</a>

			</div>
		</header>

		<main>
		<div class="container">
				<h2>Enter Admin Password</h2>
				<form method="POST" action="">
				<input type="password" name="password">
				<input type="submit" name="submit" value="send"> 

			</div>


		</main>

		<footer>
			<div class="container">
				
			</div>
		</footer>

	</body>
</html>