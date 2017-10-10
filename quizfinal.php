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
        <div id="page6">
        <?php    
            if(isset($_POST['ocelot'])) {
                if(!empty($_POST['ocelot'])) {
                    $ocelot = $_POST['ocelot'];
                    preg_replace('/[^A-Za-z0-9\-]/', '', $ocelot);

                    alias_create();

                    array_push($_SESSION['aliases'], "\n" . $ocelot);

                    write_array();

                    redirect($ocelot);
                }
                $image = 'images/otaconq.jpg';
                $result = 'otacon';
                $flavor = 'coward';
            } else {
            
                $_SESSION['count'] = 0;

                //I half expect you to type the urls manually at which point an error would pop up without this if statement
                if(isset($_SESSION['answers'])) {
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
                } else {
                    $image = 'images/raidenq.jpg';
                    $result = 'Raiden';
                    $flavor = 'rat';
                }
            }
            
            echo "<img src='$image' alt='ocelot' height='400' width='200' />";
            echo <<<EOT
            You remind me of $result the $flavor 
EOT;
            
            session_unset();
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nameErr = "";
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                }
                
                echo "$nameErr";
            }
        ?>   
            <br><br>
            <div id="title">What do you think he'd call himself next?
            <form method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <input type='text' name='ocelot' id="namefill">
            <input type='submit' value="You're pretty good" id="namebutton">
            </form>
            </div>
            
        </div>
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>