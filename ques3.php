<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ques.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Question 3</title>
</head>
<body>
    <div class="main-div">
    <h3>Write a menu driven PHP script that : <br><br>
        1.Removes the whitespaces from a string.<br>
        2.Checks if a string contains another string. (using built in php functions)<br>
        3.Checks if a string is all lower case. (using regex)<br>
        4.Replace 'the' with 'that'.
    </h3>
        <div>
           <form method="get" action="ques3.php">
               <p>Menu : </p>
               <p>1. Remove white Space</p> <br>
               <p>2. String contains given substring</p> <br>
               <p>3. String is in lower case </p><br>
               <p>4. Replace 'the' with 'that'</p> <br><br>
               <p>Enter option : </p><input type="text" name="input" id="text">
               <p>Enter the String : </p><input type="text" name="inputString" id="text">
               <p>Enter the Sub String : </p><input type="text" name="inputSubString" id="text"><br/><br>
               <input type="submit" name="submit" value="submit" id="button" class="button">
           </form>

           <?php
               if(isset($_GET['submit'])=='submit')
               {
                   $num=$_GET["input"];
                   echo "<p>Option selected is : <p>";
                   echo $num;
                   echo "<br>";

                   switch ($num)
                   {
                       case 1:
                           removeSpace();
                           break;
                       case 2:
                           checkSubstring();
                           break;
                       case 3:
                           checkLowercase();
                           break;
                       case 4:
                           replacement();
                           break;
                   }
               }

               function removeSpace()
               {
                   if(isset($_GET["inputString"]))
                   {
                       $n=$_GET["inputString"];
                       echo "<p>Entered string is : </p>$n <br>";
                       $string1 = str_replace(' ','',$n);
                       echo "<p>New string after removing space : </p>$string1";
                   }
               }

               function checkSubstring()
               {
                   if(isset($_GET["inputString"]))
                   {
                       $n=$_GET["inputString"];
                       echo "<p>Entered string is : </p>$n <br>";
                       if(isset($_GET["inputSubString"]))
                       {
                           $s1=$_GET["inputSubString"];
                           echo "<p>Entered sub string is : </p> $s1 <br>";
                           if (strpos($n, $s1) !== false)
                           {
                               echo "<p>Sub String is Present </p>";
                           }
                           else
                           {
                               echo "<p>Sub String is not Present </p>";
                           }
                       }
                   }
               }

               function checkLowercase()
               {
                  if(isset($_GET["inputString"]))
                  {
                      $n=$_GET["inputString"];
                      echo "<p>Entered string is :</p>$n <br>";
                      if(ctype_lower ($n))
                            echo "<p>The entered string </p>" ,$n , "<p> is in lower case. </p><br>";
                        else
                            echo "<p>The entered string </p>" , $n,"<p> is not in lower case.</p><br>";
                  }
                }
               function replacement()
               {
                   if(isset($_GET["inputString"]))
                   {
                       $n=$_GET["inputString"];
                       echo "<p>Entered string is : </p>$n <br>";
                       echo preg_replace('/the/', "that", $n,1);
                       }
               }
           ?>
       </div>
    </div>
</body>
</html>
