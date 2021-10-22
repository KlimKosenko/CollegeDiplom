<?php
session_start();
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $tel = $_POST['tel'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $oldpass = sha1($_POST['old_pass']);

    $sql = "SELECT * FROM users Where pass = ?";
    $stmtselect = $db->prepare($sql);
    $result = $stmtselect->execute([$oldpass]);

    if($result){
        $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
        if($stmtselect->rowCount()>0){
            $sql = "SELECT * FROM users Where login = ? OR pass = ? OR email = ?";
            $stmtselect = $db->prepare($sql);
            $result = $stmtselect->execute([$login, sha1($pass), $email]);


            if($result){
                $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
                if($stmtselect->rowCount()>1){
                    echo "3";
                }
                else{
                    if($pass!=""){
                        $sql_insert = "UPDATE users SET email = ?, birthday = ?, telephone = ?, login = ?, pass = ? Where id = ".$_SESSION['userlogin']['id'];
                        $stmtinsert = $db->prepare($sql_insert);
                        $result_insert = $stmtinsert->execute([$email,$birthday,$tel,$login,sha1($pass)]);
                    }
                    else{
                        $sql_insert = "UPDATE users SET email = ?, birthday = ?, telephone = ?, login = ? Where id = ".$_SESSION['userlogin']['id'];
                        $stmtinsert = $db->prepare($sql_insert);
                        $result_insert = $stmtinsert->execute([$email,$birthday,$tel,$login]);
                    }
                    if($result_insert){
                        $sql = "SELECT * FROM users Where id = ? LIMIT 1";
                        $stmtselect = $db->prepare($sql);
                        $result = $stmtselect->execute([$_SESSION['userlogin']['id']]);
                        $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['userlogin'] = $user;
                        echo '1';
                    }
                    else{
                        echo '0';
                    }
                }
                
            }
            else{
                echo'0';
            }
        }
        else{
            echo "pass_error";
        }
    }
    else{
        echo'0';
    }
}
else{
    echo'0';
}
?>