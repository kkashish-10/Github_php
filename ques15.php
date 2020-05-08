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
    <form class="w3-container w3-padding-32" method="get" action="Program15.php">
  			<label>Enter the string:</label><br>
  			<input class="w3-input w3-border" type="text" name="str" required><br><br>
  			<input class="w3-button w3-indigo " name="submit" type="submit" value="Submit">
  		</form>

  		<div class="w3-container w3-padding-32">

  			<?php
  		        if(isset($_GET["submit"]) == 'Submit') {
  		            $s=$_GET['str'];
  		            $r=strrev($s);

  		            if(strcasecmp($s,$r)==0) {
  		                echo "It is a Palindrome.";
  		            }
  		            else
  		                echo "It is not a Palindrome.";
  		        }
  		    ?>
    </div>
</body>
</html>
