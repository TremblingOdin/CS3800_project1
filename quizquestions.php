<?php session_start(); ?>

<!Doctype html>
<html>
    <head>
        <title> Project 1 </title> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content="project 1 cs3800"> 
        <link rel="shortcut icon" href="images/newfav.png"> 
        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/main.css">  
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        
        <div id="page5">
            <main>
            <?php
            if(check_name()) {
                remove_name();
            }
            
            if(!isset($_POST['addition'])) {
                $_SESSION['answers'] = 0;
            } else {
                $addr = (int)$_POST['addition'];
                $_SESSION['answers'] += $addr;
            }
            
            if(!isset($_SESSION['quiz'])) {
                $_SESSION['count'] = 0;
                $file = fopen("questions.txt", "r");
                $arry = array(fgets($file));
                while(!feof($file)) {
                    array_push($arry, fgets($file));
                }
                $_SESSION['quiz'] = $arry;
                fclose($file);
            }
            if($_SESSION['count'] > 4) {
                $_SESSION['count'] = 0;
                $_SESSION['answers'] = 0;
            }
            
            $adjust = $_SESSION['count'] *10;

            $count = 0;
            
            $question = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $a1 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $v1 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $a2 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $v2 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $a3 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $v3 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $a4 = $_SESSION['quiz'][$count +$adjust];
            $count += 1;
            $v4 = $_SESSION['quiz'][$count +$adjust];
            
            if($_SESSION['count'] < 4) {
                echo "<form action='quizquestions.php' method='post'>";
                echo "<h2>$question</h2>";
                echo "<input type='radio' value='$v1' name='addition' checked='checked'>$a1<br>";
                echo "<input type='radio' value='$v2' name='addition'>$a2<br>";
                echo "<input type='radio' value='$v3' name='addition'>$a3<br>";
                echo "<input type='radio' value='$v4' name='addition'>$a4<br>";
                echo "<input type='submit' value='Submit'>";
                echo "</form>";
                
                $_SESSION['count'] += 1;
            } else {
                echo "<form action='quizfinal.php' method='post'>";
                echo "<h2>$question</h2>";
                echo "<input type='radio' value='$v1' name='addition' checked='checked'>$a1<br>";
                echo "<input type='radio' value='$v2' name='addition'>$a2<br>";
                echo "<input type='radio' value='$v3' name='addition'>$a3<br>";
                echo "<input type='radio' value='$v4' name='addition'>$a4<br>";
                echo "<input type='submit' value='Submit'>";
                echo "</form>";
            }
            ?>
            </main>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>