<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ques.css">
    <title>Question 1</title>
</head>
<body>
    <div class="main-div">
    <h3>PHP page which accepts string from user. After submission that page displays the reverse of provided string.</h3>

        <form method="post">
            <label for="String">Enter a string:</label><br><br>
            <input type="string" name="string" id="String">
            <br><br>
            <input class="button" type="submit" name="submit" value="Submit">
        </form>

        <?php

            if(isset($_POST["submit"])) {
                if($_POST["string"]) {
                    echo "Entered String : " . $_POST["string"] . "<br>";
                    echo "Reversed string : " . strrev($_POST["string"]);
                }
            }
        ?>

    </div>
</body>
</html>
