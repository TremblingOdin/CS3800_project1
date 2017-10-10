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
        <?php 
            include("includes/header.php");
            
            $_SESSION['count'] = 0;
            
            if($_SESSION['answers'] <= 4) {
                $image = 'images/rocelotq.png';
                $result = 'Revolver Ocelot';
                $flavor = 'Russian gunslinger in Shadow Moses';
            } else if($_SESSION['answers'] <= 8) {
                $image = 'images/socelotq.jpg';
                $result = 'Shalashaska';
                $flavor = 'man possessed by sins of his past';
            } else if($_SESSION['answers'] <= 12) {
                $image = 'images/mocelotq.jpg';
                $result = 'Major Ocelot';
                $flavor = 'young man intent on saving the word'; 
            } else if($_SESSION['answers'] <= 16) {
                $image = 'images/locelotq.jpg';
                $result = 'Liquid Ocelot';
                $flavor = 'man who saw Big Bosses dream through to the end';                  
            } else {
                $image = 'images/ocelotq.png';
                $result = 'Ocelot';
                $flavor = 'man who corrupted a martyr';                
            }
            
            echo "<image src='$image' alt='ocelot'>";
            
            echo <<<EOT
            You remind me of $result the $flavor 
EOT;
            
            session_unset();
            
            echo "<br><br>What do you think he'd call himself next?<br>";
            echo "<form method='post' action='analyse.php'>";
            echo "<input type='text' name='ocelot' value='Big Papi'><br>";
            echo "<input type='submit' value=\"You're pretty good\">";
            echo "</form>";
            
            include("includes/footer.php");
        ?>
    </body>
</html>