<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dataagenobc extends BaseController
{
    public function listdata()
    {
        if (session()->logged_in)  return view('mobc/listdata');
        else return redirect()->to('login');
    }

    public function detail()
    {
        if (session()->logged_in)  return view('mobc/detail');
        else return redirect()->to('login');
    }

    public function tambahdata()
    {
        if (session()->logged_in)  return view('mobc/tambahdata');
        else return redirect()->to('login');
    }

    public function hapusdata()
    {
        if (session()->logged_in)  return view('mobc/hapusdata');
        else return redirect()->to('login');
    }

    public function editdata()
    {
        if (session()->logged_in)  return view('mobc/editdata');
        else return redirect()->to('login');
    }
}
