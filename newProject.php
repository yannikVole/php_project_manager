<?php
/**
 * Created by PhpStorm.
 * User: yanni
 * Date: 7/29/2018
 * Time: 10:24 AM
 */
require_once 'app/config/appConfig.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

    $name = $_POST['projectName'];

    if(mkdir(PROJECTS_ROOT.'/'.$name)){
        echo 'success';
    }else{
        header($_SERVER['SERVER_PROTOCOL'].' 500 Could not create Directory',500);
    }
}