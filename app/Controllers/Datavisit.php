<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        // return view('mvisit/satubulan');
        if (session()->logged_in)  return view('mvisit/satubulan');
        else return redirect()->to('login');
    }

    public function duabulan()
    {
        // return view('mvisit/duabulan');
        if (session()->logged_in)  return view('mvisit/duabulan');
        else return redirect()->to('login');
    }

    public function detail()
    {
        // return view('mvisit/detail');
        if (session()->logged_in)  return view('mvisit/detail');
        else return redirect()->to('login');
    }

    public function edit()
    {
        // return view('mvisit/edit');
        if (session()->logged_in)  return view('mvisit/edit');
        else return redirect()->to('login');
    }
}
