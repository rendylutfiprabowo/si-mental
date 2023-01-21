<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datacaring extends BaseController
{
    public function satubulan()
    {
        return view('mcaring/satubulan');
    }

    public function duabulan()
    {
        return view('mcaring/duabulan');
    }

    public function detail()
    {
        return view('mcaring/detail');
    }

    public function edit()
    {
        return view('mcaring/edit');
    }
}
