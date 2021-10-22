<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $tel = $_POST['tel'];
    $login = $_POST['login'];
    $pass = sha1($_POST['pass']);

    $sql = "SELECT * FROM users Where login = ? OR pass = ? OR email = ? LIMIT 1";
    $stmtselect = $db->prepare($sql);
    $result = $stmtselect->execute([$login, $pass, $email]);


    if($result){
        $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
        if($stmtselect->rowCount()>0){
            echo "3";
        }
        else{
            $sql_insert = "INSERT INTO users (email, birthday, telephone, login, pass) VALUES(?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql_insert);
            $result_insert = $stmtinsert->execute([$email,$birthday,$tel,$login,$pass]);
            if($result_insert){
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
}else{
    echo '0';
}
?>