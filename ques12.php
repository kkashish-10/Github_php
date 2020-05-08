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

		<form  method="get" action="Program12.php">
			<label>Enter non negative number :</label><br>
			<input  type="number" name="number" required><br>
            <br>
			<input name="submit" type="submit" value="Submit">
		</form>

		<div >
			<?php
                function prime($n) {
                        if($n>1)
                        {
                            $p=false;
                            for($i=2; $i<=$n/2; $i++)
                            {
                                if($n % $i==0)
                                {
                                    $p=true;
                                    break;
                                }
                            }

                            if($p)
                                echo "It is not a Prime Number.";
                            else
                                echo "It is a Prime Number.";
                        }
                        else
                            echo $n." is not a non-negative integer greater than 1.";
                }
                if(isset($_GET["submit"]) == 'Submit') {
                    $n=$_GET['number'];
                    prime($n);
                }
    		?>

    </div>
</body>
</html>
