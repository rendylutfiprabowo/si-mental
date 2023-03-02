<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }


    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function login()
    {
        if (session()->logged_in) return redirect()->to('dashboard');
        return view('login');
    }
   
    public function eror()
    {
        return view('eror');
    }

    public function alert()
    {
        return view('alert');
    }
}
