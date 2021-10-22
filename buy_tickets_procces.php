<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $id_film = $_POST['id_film'];
    $id_user = $_POST['id_user'];
    $film_name = $_POST['film_name'];
    $mtime = $_POST['mtime'];
    $mdate = $_POST['mdate'];
    $cost = $_POST['cost'];
    $seat_n = $_POST['seat_n'];
    $seats = $_POST['selseats'];
    
    $sql_insert = "INSERT INTO tickets (id_film, id_user, film_name, mtime, mdate,cost,seat_n,seats) VALUES(?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql_insert);
    $result_insert = $stmtinsert->execute([$id_film, $id_user, $film_name, $mtime, $mdate,$cost,$seat_n,$seats]);
    if($result_insert){
        echo '1';
        }
    else{
        echo '0';
        }
}
else{
    echo'0';
}
?>