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
        if(check_name()) {
            remove_name();
        }
        
        $handle = fopen('aliases.txt', 'a');
        
        fwrite($handle, "\n" . $string);
         
        fclose($handle);
    }
    
    function write_array() {
        $handle = fopen('aliases.txt', 'w');
        
        array_values($_SESSION['aliases']);
        
        for($index = 0; $index < 9; $index++) {
            fwrite($handle, $_SESSION['aliases'][$index]);
        }
    }
    
    function check_name() {
        $handle = fopen('aliases.txt', 'a+');
        $checker = fgets($handle);
        fclose($handle);
        if(!($checker=='Liquid Ocelot')) {
            return true;
        } else {
            return false;
        }
    }
    
    function get_name() {
        $handle = fopen('aliases.txt', 'r');
        $count = 0;
        while(!feof($handle)) {
            fgets($handle);
            $count++;
        }
        rewind($handle);
        for($i = 0; $i < ($count - 1); $i++) {
            fgets($handle);
        }
        $userInput = fgets($handle);
        fclose($handle);
        return $userInput;
    }
    
    function remove_name() {
        $redoing = fopen('aliases.txt', 'w');
        $input = fopen('reinsertaliases.txt', 'r');
        while(!feof($input)) {
            fwrite($redoing, fgets($input));
        }
        fclose($redoing);
        fclose($input);
    }
    
    function alias_create() {
        if(!isset($_SESSION['aliases'])) {
        if(check_name()) {
            remove_name();
        }
            
        $file = fopen('aliases.txt', 'r');
        
        unset($_SESSION['aliases']);
        
        $arry = array();
        
        while(!feof($file)) {
             array_push($arry, fgets($file));
        }
        
        $_SESSION['aliases'] = $arry;
        }
    }
?>

