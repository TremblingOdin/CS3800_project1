
<?php

include('includes/functions.php');
if(check_name()) {
    $title = get_name();
} else {
    $title = 'Revolver Ocelot';
}

echo "<header><video width='120' height='100' id='fidgetspinner1' autoplay loop muted='true'><source src='images/ocelotvid.mp4' type='video/mp4'></video> <h1>$title</h1> <video width='120' height='100' id='fidgetspinner2' autoplay loop muted='true'><source src='images/ocelotvid.mp4' type='video/mp4'></video></header>";
echo "<nav><ul><a href='index.php'><li>Home</a></li><a href='about.php'><li>About</a></li><a href='history.php'><li>History</a></li><li><a href='quizquestions.php'>Quiz</a></li></ul></nav>";
?>

