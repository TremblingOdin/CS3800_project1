<?php
    include('includes/functions.php');
    session_start();
    
    $ocelot = $_POST['ocelot'];
    preg_replace('/[^A-Za-z0-9\-]/', '', $ocelot);
    echo "$ocelot";
    
    alias_create();
    
    array_push($_SESSION['aliases'], $ocelot);
    
    write_array();
    
    print_r($_SESSION['aliases']);
    
    redirect($ocelot);
?>
