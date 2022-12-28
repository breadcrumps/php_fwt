<?php
class UserController
{
    public function index(){
        view("index", ["manyusers"=>App::get("database")->selectAll("users")]);
    }
}