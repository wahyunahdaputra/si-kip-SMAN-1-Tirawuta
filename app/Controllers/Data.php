<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index(): string
    {
        return view('data/home');
    }

    public function login()
    {
        
        echo view('data/login');
        
    }

    public function formAps1() 
    {
        echo view('layout/header');
        echo view('data/formAps1');
        echo view('layout/footer');
    }
}
