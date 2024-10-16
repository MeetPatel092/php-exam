<?php

    include "../../config/config.php";


    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $config = new Config();

        $dir_fname = $_POST['dir_fname'];
        $dir_iname = $_POST['dir_iname'];

       $res =  $config->addDiractor($dir_fname,$dir_iname);

       if($res){
        $arr['data'] = "Diractor details is inserted successfully....";
       }else{
        $arr['data'] = "Diractor details is insertion failed";
       }

    }else{
        $arr['error'] = "only POST http request method is allowed....";
    }

    echo json_encode($arr);



?>