<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('#');
    }

    public function login()
    {
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

    public function tabel()
    {
        return view('documentation/tabel');
    }

    public function eror()
    {
        return view('eror');
    }
}
