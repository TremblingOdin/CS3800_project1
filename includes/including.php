<?php
    function redirect($string) {
        if($string == "Hideo Kojima"){
            header("refresh:1;url=easterEgg.php");
        }
        else{
            header("refresh:1;url=index.php");
        }
    }
    
    function write_name($string) {
        $handle = fopen('aliases.txt', 'a');
        
        fwrite($handle, $string);
        
        fclose($handle);
    }
?>

