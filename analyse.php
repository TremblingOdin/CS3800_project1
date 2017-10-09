<?php
    include('includes/functions.php');
    session_start();
    
    write_name($_POST['ocelot']);
    
    redirect($_POST['ocelot']);
?>
