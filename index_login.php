<?php
    session_start();

    if(!isset($_SESSION['userlogin'])){
        header("location: index.php");
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("location: index.php");
    }
    
    require_once('config.php');
?>
<?php require("components/header.php") ?>
<?php require("components/nav_login.php")?>
<?php require("components/modal_vikno.php")?>  
<?php require("components/showcase.php")?>
<?php require("components/mini_showcase.php")?>     
<?php require("components/movies.php")?>       
<?php require("components/footer.php")?>   