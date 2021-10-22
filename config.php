<?php
    $db_user = "root";
    $db_pass = "";
    $db_name = "Austria_cinema";

    $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function get_showcase_movies(){
        global $db;
        $movies = $db->query("SELECT * FROM movies LIMIT 5");
        return $movies;
    }
    function get_mini_showcase_movies(){
        global $db;
        $movies = $db->query("SELECT * FROM movies");
        return $movies;
    }
    function get_film_info_by_id($id){
        global $db;
        $movie = $db->query("SELECT * FROM movies WHERE id = $id");
        return $movie->fetch(PDO::FETCH_ASSOC);
    }
    function get_user_tickets($id){
        global $db;
        $tickets = $db->query("SELECT * FROM tickets WHERE id_user = $id");
        return $tickets;
    }
?>
