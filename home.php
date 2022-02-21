<?php 
session_start();
include "connection.php";
if (isset($_SESSION['id'])){
$query = "SELECT * FROM question";
$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
$total = mysqli_num_rows($run);
}
else {
	header("location: index.php");
}
?>

<html>
	<head>
		<title>PHP-QUIZ</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<div class="container">
				<h1>PHP-QUIZ</h1>
			</div>
		</header>

		<main>
			<div class="container">
				<h2>Welcome to PHP QUIZ !</h2>
				<p>This is just a simple quiz game to test your knowledge!</p>
				<ul>
				    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
				    <li><strong>Type: </strong>Multiple Choice</li>
				    <li><strong>Estimated time for each question: </strong><?php echo $total * 0.05 * 60; ?> seconds</li>
				     <li><strong>Score: </strong>   &nbsp; +1 point for each correct answer</li>
				</ul>
				<a href="question.php?n=1" class="start">Start QUIZ</a>
				<a href="exit.php" class="add">Exit</a>

			</div>
		</main>

		<footer>
			<div class="container">
				<b>!!..........PHP-QUIZ.............!!</b>
			</div>
		</footer>

	</body>
</html>
