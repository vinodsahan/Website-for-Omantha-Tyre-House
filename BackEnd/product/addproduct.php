<?php

if (count($_FILES["file"]["name"]) > 0) {
    for ($count = 0; $count < count($_FILES["file"]["name"]); $count++) {
        $file_name = $_FILES["file"]["name"][$count];
        $tmp_name = $_FILES["file"]['tmp_name'][$count];

        $location = 'upload/' . $file_name;
        $Types = array('jpg','png','jpeg');

        $pathType = pathinfo($tmp_name,PATHINFO_EXTENSION);
        if(in_array($tmp_name,$pathType)){
            if(move_uploaded_file($tmp_name,$location)){
                echo 'sucess ';
            }
        }else{
            echo 'not in correct type';
        }
        
    }
}
