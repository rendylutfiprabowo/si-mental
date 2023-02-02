<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('#');
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

    public function template()
    {
        return view('template');
    }

    public function documentation()
    {
        return view('documentation/documentation');
    }

    public function documentation1()
    {
        return view('documentation/documentation1');
    }

    public function documentation2()
    {
        return view('documentation/1');
    }

    public function documentation3()
    {
        return view('documentation/2');
    }

    public function documentation4()
    {
        return view('documentation/tabelcopy');
    }

    public function eror()
    {
        return view('eror');
    }
}
