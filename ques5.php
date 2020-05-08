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
    <?php
            echo "<p>Array is : </p><br>";
            $color = array("white", "green", "red");
            for ($i=0; $i < 3; $i++) {
                if($i < 2)
				    echo $color[$i].",";
                if($i == 2)
                    echo $color[$i];
			}
            sort($color);
           echo "<br><br><p>Sorted Array is : </p>";
            print("<ul>");
            foreach($color as $colour )
                print("<li> $colour </li>");
            print("</ul>");
          ?>
    </div>
</body>
</html>
