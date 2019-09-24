 <?php 

 session_start();
 if ((!isset($_SESSION["logar"])) || (!isset ($_SESSION["senha_log"]))) {
     header('location:login.html');
     exit;
     
 }else{
    $logado = $_SESSION['logar'];
 }
 ?>
    <?php
        echo ("bem-vindo <u>$logado</u>");
    ?>
    
