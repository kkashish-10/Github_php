<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ques.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Question 2</title>
</head>
<body>
    <div class="main-div">
        <h3>Enter Number of Elements and find the sorted list of arrays </h3>
            <form name="" method="get" action="ques2.php">
            <label for="input">Enter the Elements :</label><br>
                <input type="text" name="input" id="ele"><br>
                <?php
                    if(isset($_GET['submit'])=='submit')
                    {
                        echo "Enter the elements : <br>";
                        $ele=$_GET["input"];
                        for ($i = 0; $i < $ele; $i++)
                        {
                            echo "<br><input type='text' name='myarray[]' id='ele'/>";
                            echo "<br>";
                        }
                    }
                    echo "<br><input type='submit' name='submit' value='submit' class='button'> <br>";
                    if(isset($_GET['submit'])=='submit')
                    {
                        if(isset ( $_GET["myarray"]))
                        {
                            $a= $_GET["myarray"];
                            $length=count($a);
                            echo "Entered elements is : <br>";
                            for ($j = 0 ; $j < $length ; ++$j)
                                echo "$a[$j]<br>";
                            sort($a);
                            echo "Sorted elements are <br>";
                            for ($j = 0 ; $j < $length ; ++$j)
                                echo "$a[$j]<br>";
                        }
                      }
                  ?>
            </form>
    </div>
</body>
</html>
