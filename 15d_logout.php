<?php 
    // Pagina de logout (15c_logout.php)
    session_start();
    session_destroy();
    header("Location: 15d_login.php");
    exit();
?>