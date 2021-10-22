<?php
    session_start();
    
    if(isset($_SESSION['userlogin'])){
        header("location: index_login.php");
    }
    
    require_once('config.php');
?>
<?php require("components/header.php") ?>
<?php require("components/nav.php")?>
<?php require("components/modal_vikno.php")?>  
<?php require("components/showcase.php")?>
<?php require("components/mini_showcase.php")?>     
<?php require("components/movies.php")?>       
<?php require("components/footer.php")?>         
