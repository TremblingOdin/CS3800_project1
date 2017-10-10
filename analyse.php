<?php
    include('includes/functions.php');
    session_start();
    
    $ocelot = $_POST['ocelot'];
    preg_replace('/[^A-Za-z0-9\-]/', '', $ocelot);
    
    write_name($ocelot);
    
    alias_create();
    
    redirect($ocelot);
?>
