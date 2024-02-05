<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index(): string
    {
        return view('data/home');
    }

    public function forms()
    {
        echo view('layout/header');
        echo view('Data/forms');
        echo view('layout/footer');
    }

    public function login()
    {
        
        echo view('data/login');
        
    }
}
