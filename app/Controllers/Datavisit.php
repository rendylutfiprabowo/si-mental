<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        return view('mvisit/satubulan');
    }

    public function duabulan()
    {
        return view('mvisit/duabulan');
    }

    public function detail()
    {
        return view('mvisit/detail');
    }

    public function edit()
    {
        return view('mvisit/edit');
    }
}
