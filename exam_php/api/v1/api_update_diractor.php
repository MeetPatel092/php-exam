<?php

    include "../../config/config.php";


    header("Access-Control-Allow-Methods: PUT , PATCH");
    header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH'){
        $config = new Config();

       $input =  file_get_contents("php://input");

        parse_str($input,$_UPDATE);

        $dir_fname = $_UPDATE['dir_fname'];
        $dir_iname = $_UPDATE['dir_iname'];
        $dir_id = $_UPDATE['dir_id'];

       $res =  $config->updateDiractor($dir_id,$dir_fname,$dir_iname);

       if($res){

        $arr['data'] = "Data Updated successfully....";

       }else{
        $arr['data'] = "Data Updation failed....";
       }


    }else{
        $arr['error'] = "only PUT AND PATCH http request method is allowed....";
    }

    echo json_encode($arr);



?>