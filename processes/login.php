<?php
session_start();
require "../config.php";
$msg="No se pudo acceder";
    if(isset($_POST['btnlogin'])):
        require "../class/conexion.php";
        $user = new ApptivaDB();

        $email=$_POST['email'];
        $password=md5($_POST['password']);

        $data = "email='".$email."' AND password='".$password."'";

        $u = $user->search("login",$data);
    
        if($u):
            foreach($u as $data):
                $_SESSION['administrador'] = $data['name'];
                $msg="Welcome";
            endforeach;
        endif;
    endif;
    
    header("location:".urlsite."?mensaje=".$msg);

?>