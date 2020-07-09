<?php 
    session_start();
    include "config.php";
    require "class/conexion.php";
    $user = new ApptivaDB();
    include "inc/header.php"; 
    if(isset($_SESSION['administrador']))
        $page=(isset($_GET['page'])) ? $_GET['page']:"index";    
    else
        $page="login";
    include "page/".$page.".php";
    $user = null;
    include "inc/footer.php";
?>