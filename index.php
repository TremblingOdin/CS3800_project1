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
        
        <main>
            <h2>Conception</h2>
            
            
            <video width="480" height="240" autoplay muted="true">
                <source src="images/mainVideo.mp4" type="video/mp4">
            </video> 
            
            <br>
            <br>
            
            <h2>Aliases</h2>
            <?php
                $file = fopen("aliases.txt", "r");
                
                while(!feof($file)){
                    $printing = fgets($file);
                    echo "$printing <br>";
                }
                fclose($file);
            ?>

            <!--<a href="easterEgg.php"><input type="button" id="begin" value="Go To Easter Egg (To Be Removed)"/></a>-->

            <h3>Who Will Your True Hero Be!</h3>
            <img src="images/redx.png" id="redx">
            
            <img src="images/revolverocelot.png" id="ocelot">

        </main>

        <?php include("includes/footer.php"); ?>

    </body>
</html>




