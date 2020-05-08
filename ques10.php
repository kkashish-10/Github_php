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

  		<form  method="get" action="Program10.php">
  			<label>Number 1:</label><br>
  			<input  type="number" name="n1" required><br>
              <br>
  			<label>Number 2:</label><br>
  			<input type="number" name="n2"><br>
              <br>
  			<label>Number 3:</label><br>
  			<input  type="number" name="n3"><br><br>
              <br>
  			<input name="submit" type="submit" value="Submit">
  		</form>

  		<div >
  			<?php
  		        if(isset($_GET["submit"]) == 'Submit')
  		        {
  		            $a=$_GET['n1'];
  		            $b=$_GET['n2'];
  		            $c=$_GET['n3'];

  		            if($a>$b && $a>$c)
  		                $max=$a;

  		            else if($b>$c && $b>$a)
  		                    $max=$b;
  		            else
  		                    $max=$c;

  		            echo "Largest Number is ".$max;
  		        }
      		?>
    </div>
</body>
</html>
