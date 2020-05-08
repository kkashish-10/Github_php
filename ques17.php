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
    <form class="w3-container w3-padding-32" method="get" action="Program17.php">
  			<label> Enter the number of rows of pattern to print:</label><br>
  			<input class="w3-input w3-border" type="number" name="num" required><br><br>
  			<input class="w3-button w3-indigo " name="submit" type="submit" value="Submit">
  		</form>

  		<div class="w3-container w3-padding-32">

  			<?php
  		        if(isset($_GET["submit"]) == 'Submit')
  		        {
  		            $n=$_GET['num'];
  		            if($n>0)
  		            {
  		                for($i=1; $i<=$n; $i++)
  		                {
  		                    for($j=1; $j<=$i; $j++)
  		                    {
  		                        echo "* ";
  		                    }
  		                    echo "<br>";
  		                }
  		            }
  		            else
  		                echo $m." is not a Non-Negative Integer.";
  		        }
  		    ?>
    </div>
</body>
</html>
