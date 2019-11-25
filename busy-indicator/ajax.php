<?php
include "config.php";
include_once "Commmon.php";
if (isset($_POST['key']) == "getData"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    die();
    $common = new Commmon();
    $save  = $common->saveData($connection,$name,$email);
    if ($save){
        echo "test^success";
    }else{
        echo "test^failed";
    }

}