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
    <form  method="get" action="Program11.php">
  			<label>Enter non negative number :</label><br>
  			<input  type="number" name="number" required><br>
              <br>
  			<input name="submit" type="submit" value="Submit">
  		</form>

  		<div >
  			<?php
                  function factorial($n) {
                          if($n>=0) {
                              if($n==0 || $n==1) {
                                  $f=1;
                              }
                              else {
                                  $f=1;
                                  for($i=2; $i<=$n; $i++) {
                                      $f=$f*$i;
                                  }
                              }
                              echo "Factorial is ".$f;
                          }
                          else {
                              echo $n." is not a Non-Negative Integer.";
                          }
                  }
                  if(isset($_GET["submit"]) == 'Submit') {
                      $n=$_GET['number'];
                      factorial($n);
                  }
      		?>
    </div>
</body>
</html>
