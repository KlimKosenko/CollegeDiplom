<?php
session_start();
require_once('config.php');

$id = $_POST['id'];
$date = $_POST['date'];
$time = $_POST['time'];


$seats = $db->query("SELECT seats FROM tickets  Where id_film = $id  AND mdate = '$date' AND mtime = '$time'");
$seats = $seats->fetchAll(PDO::FETCH_ASSOC);
if($seats!=[]){
    $response = [
        "status" => true,
        "seats" => $seats
    ];
    echo json_encode($response);
    die();}
else{
    $response = [
        "status" => false,
        "seats" => $seats
    ];
}

?>