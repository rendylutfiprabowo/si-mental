<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datacaring extends BaseController
{
    public function satubulan()
    {
        if (session()->logged_in)  return view('mcaring/satubulan');
        else return redirect()->to('login');
    }

    public function duabulan()
    {
        if (session()->logged_in)  return view('mcaring/duabulan');
        else return redirect()->to('login');
    }

    public function detail()
    {
        if (session()->logged_in)  return view('mcaring/detail');
        else return redirect()->to('login');
    }

    public function edit()
    {
        if (session()->logged_in)  return view('mcaring/edit');
        else return redirect()->to('login');
    }
}
