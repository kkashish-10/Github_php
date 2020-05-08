<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ques.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Question 5</title>
</head>
<body>
    <div class="main-div">
      <form class="w3-container w3-padding-32" method="POST" action="ques6.php">
			<select class="w3-select" name="option">
				<option value="" disabled selected>Select language</option>
				<option value="1">English</option>
				<option value="2">Hindi</option>
				<option value="3">Spanish</option>
				<option value="4">French</option>
				<option value="5">Russian</option>
				<option value="6">Japanese</option>
			</select>
			<br><br>
			<input class="w3-button w3-indigo" type="submit" value="Submit">
			<br><br>
		</form>

		<div class="w3-container">
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$op=$_POST["option"];

				switch($op)
				{
					case '1':echo "<h3>Hello</h3>";
							 break;
					case '2':echo "<h3>Namaste</h3>";
							 break;
					case '3':echo "<h3>Hola</h3>";
							 break;
					case '4':echo "<h3>Bonjour</h3>";
							 break;
					case '5':echo "<h3>Zdrastvuyitya</h3>";
							 break;
					case '6':echo "<h3>Konnichiwa</h3>";
							 break;
				}
			}
		?>
    </div>
</body>
</html>
