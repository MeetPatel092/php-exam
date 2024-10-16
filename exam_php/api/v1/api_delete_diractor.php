<?php

    include "../../config/config.php";


    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $config = new Config();

       $input =  file_get_contents("php://input");

        parse_str($input,$DELETE);

        $dir_id = $DELETE['dir_id'];

       $res =  $config->deleteDiractor($dir_id);

       if($res == 1){

        $arr['data'] = "Data DELTED successfully....";

       }else{
        $arr['data'] = "Data DELECION failed....";
       }


    }else{
        $arr['error'] = "only DELETE http request method is allowed....";
    }

    echo json_encode($arr);


?>