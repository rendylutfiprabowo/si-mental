<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if (session()->logged_in) return view('dashboard/dashboard');
        else return redirect()->to('login');
    }
}
