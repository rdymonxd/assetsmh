<?php 
    session_start();
    include "config.php";
    include "inc/header.php";
    if(isset($_SESSION['administrador']))
        $page=(isset($_GET['page'])) ? $_GET['page']:"index";    
    else
        $page="login";
    include "page/".$page.".php";
    include "inc/footer.php";
?>