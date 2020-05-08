<!DOCTYPE html>
<html>
<head>
    <title>Question 4</title>
    <link rel="stylesheet" href="ques.css">
</head>

<body>
    <div class="main-div">
		<form method="get" action="ques4.php">
			<label>Enter your birthday:</label><br><br>
			<input  type=date name="bday" required><br><br>
			<input  name="submit" class="button" type="submit" value="Calculate"><br><br>
		</form>

            <?php
            if(isset($_GET["submit"]) == "Calculate")
                {
                $b=$_GET["bday"];
				$arr=explode('-',$b);
                $date=getdate();
                $bday=mktime(0,0,0,$arr[1],$arr[2],$date['year']);
                $t=time();
                $diff=$bday-$t;
                $days=(int)($diff/86400);
				echo "<b>Number of days left till birthday : ".$days."</b>";
                }
            ?>
    </div>
</body>
</html>
