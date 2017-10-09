<?php
    include('includes/functions.php');
    session_start();
    
    write_name($_POST['ocelot']);
    
    alias_create();
    
    redirect($_POST['ocelot']);
?>
