<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        if (session()->logged_in)  return view('mvisit/satubulan');
        else return redirect()->to('login');
    }

    public function duabulan()
    {
        if (session()->logged_in)  return view('mvisit/duabulan');
        else return redirect()->to('login');
    }

    public function detail()
    {
        if (session()->logged_in)  return view('mvisit/detail');
        else return redirect()->to('login');
    }

    public function edit()
    {
        if (session()->logged_in)  return view('mvisit/edit');
        else return redirect()->to('login');
    }
}
