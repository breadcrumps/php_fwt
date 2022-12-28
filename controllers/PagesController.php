<?php

class PagesController
{
    public function home()
    {
        $users = App::get("database")->selectAll("users");

        view('index', [manyusers=>$users]);
    }

    public function about()
    {
        view('about');
    }

    public function contact()
    {
        view('contact');
    }

    public function addName()
    {
        App::get("database")->insert(['name'=>$_POST['name']], "users");

        header("Location: /");
    }
}