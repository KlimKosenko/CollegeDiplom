<?php session_start() ?>
<?php require("components/header.php") ?>
<?php
    if(isset($_SESSION['userlogin'])){
        require("components/nav_login.php");
    }
    else{
        require("components/nav.php");
    }
 ?>
<?php require("components/modal_vikno.php")?>
          
<?php require("components/footer.php")?>