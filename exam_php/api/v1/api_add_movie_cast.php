<?php

    include "../../config/config.php";


    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $config = new Config();

        $movie_id = $_POST['movie_id'];
        $role = $_POST['role'];

       $res =  $config->addMoviecast($movie_id,$role);

       if($res){
        $arr['data'] = "movie details is inserted successfully....";
       }else{
        $arr['data'] = "movie details is insertion failed";
       }

    }else{
        $arr['error'] = "only POST http request method is allowed....";
    }

    echo json_encode($arr);



?>