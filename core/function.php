<?php

function dd($toDump){
    die(var_dump($toDump));
}

function view($name, $data=[]){
    extract($data);
    return require "views/$name.view.php";
}