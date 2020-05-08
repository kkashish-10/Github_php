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
    <form class="w3-container w3-padding-32" method="GET" action="Program16.php">
  			<label> Enter the number of terms of Fibonacci series to be displayed:</label><br>
  			<input class="w3-input w3-border" type="number" name="num" required><br><br>
  			<input class="w3-button w3-indigo " name="submit" type="submit" value="Submit">
  		</form>

  		<div class="w3-container w3-padding-32">

  			<?php
  		        function fib($n) {
  		            if($n==0 || $n==1)
  		                return $n;
  		            else
  		                return fib($n-1)+fib($n-2);

  		        }

  		        if(isset($_GET["submit"]) == 'Submit') {
  		            $m=$_GET['num'];
  		            if($m>=0) {
  		   				if($m==0)
  		   					echo $m;
  		   				else
  		   				for($i=1;$i<=$m;$i++) {
  		   					echo fib($i)."  ";
  		   				}
  		            }
  		            else
  		                echo $m." is not a Non-Negative Integer.";
  		        }
  		    ?>
    </div>
</body>
</html>
