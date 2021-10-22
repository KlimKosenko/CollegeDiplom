<?php
session_start();
require_once('config.php');

$username = $_POST['login'];
$password = sha1($_POST['pass']);

$sql = "SELECT * FROM users Where login = ? AND pass = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount()>0){
        $_SESSION['userlogin'] = $user;
        echo "1";
    }
    else{
        echo"0";
    }
}else{
    echo'0';
}
?>