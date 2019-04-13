<?php
// para tumabok sa buong site
    

if(isset($_POST['logout-submit'])){
    
    session_start();
    session_unset();// para ma delete ang session
    session_destroy();
    header("Location: ../index.html");
    
    include 'index.html';
    
}
