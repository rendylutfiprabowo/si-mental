<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dataagenobc extends BaseController
{
    public function listdata()
    {
        return view('mobc/listdata');
    }

    public function detail()
    {
        return view('mobc/detail');
    }

    public function tambahdata()
    {
        return view('mobc/tambahdata');
    }

    public function hapusdata()
    {
        return view('mobc/hapusdata');
    }

    public function editdata()
    {
        return view('mobc/editdata');
    }
}
