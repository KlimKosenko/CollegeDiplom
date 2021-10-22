<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $id_seats = $_POST['id_seats'];
    
    $sql_delete = "DELETE FROM tickets WHERE seats=?";
    $stmtdel = $db->prepare($sql_delete);
    $result_del = $stmtdel->execute([$id_seats]);
    if($result_del){
        echo '1';
        }
    else{
        echo '0';
        }
}