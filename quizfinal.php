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
                $_SESSION['count'] = 0;

                if ($_SESSION['answers'] <= 4) {
                    $image = 'images/rocelotq.png';
                    $result = 'Revolver Ocelot';
                    $flavor = 'Russian gunslinger in Shadow Moses';
                } else if ($_SESSION['answers'] <= 8) {
                    $image = 'images/socelotq.jpg';
                    $result = 'Shalashaska';
                    $flavor = 'man possessed by sins of his past';
                } else if ($_SESSION['answers'] <= 12) {
                    $image = 'images/mocelotq.jpg';
                    $result = 'Major Ocelot';
                    $flavor = 'young man intent on saving the word';
                } else if ($_SESSION['answers'] <= 16) {
                    $image = 'images/loceotq.jpg';
                    $result = 'Liquid Ocelot';
                    $flavor = 'man who saw Big Bosses dream through to the end';
                } else {
                    $image = 'images/ocelotq.png';
                    $result = 'Ocelot';
                    $flavor = 'man who corrupted a martyr';
                }

                echo <<<EOT
            <p>You remind me of $result the $flavor</p> 
EOT;

                echo "<image src='$image' alt='ocelot'>";

                session_unset();

                echo "<h2>What do you think he'd call himself next?</h2>";
                echo "<form method='post' action='analyse.php'>";
                echo "<input type='text' name='ocelot'><br>";
                echo "<br><input type='submit' value=\"You're pretty good\">";
                echo "</form>";
                ?>


            </main>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>