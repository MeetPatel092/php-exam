<?php

    include "../../config/config.php";


    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $config = new Config();

        $act_id = $_POST['act_id'];

        $res =  $config->fetchSingleMoviecast($act_id);
        $all_records = [];

         $record = mysqli_fetch_assoc($res);
         array_push($all_records , $record);
        
        echo json_encode($all_records);

        

    }else{
        $arr['error'] = "only POST http request method is allowed....";
        echo json_encode($arr);
    }

    


?>