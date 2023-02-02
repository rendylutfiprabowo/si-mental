<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    function __construct()
    {
        parent::__construct();
        // $this->DetPel = new DetPel();
    }
    public function index()
    {
        // // Data Caring
        // $jumlah_rna = $this->DetPel->countAllResults();

        // $data = [
        //     'jumlah_rna' => $jumlah_rna
        // ];
        if (session()->logged_in) return view('dashboard/dashboard');
        else return redirect()->to('login');
    }
}
