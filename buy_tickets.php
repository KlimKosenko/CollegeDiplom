<?php session_start() ?>
<?php require_once('config.php')?>
<?php if(isset($_SESSION['userlogin'])){?>
        <?php require("components/header.php") ?>
        <?php require("components/nav_login.php");?>
        <?php require("components/modal_vikno.php")?>
        <?php require("components/seats.php")?>         
        <?php require("components/footer.php")?>
<?php }
else{
    header('Location: '."index.php");
}
