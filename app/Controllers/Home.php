<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function generate(){
        echo password_hash('1234', PASSWORD_BCRYPT);
    }

}
