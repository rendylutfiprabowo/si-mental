<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetPel;
use App\Models\VisitModel;

class Dashboard extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $caring = new DetPel();
        $visit = new VisitModel();

        //data hasil caring
        $janjibayar = $caring->countAllResults();
        $rna = $caring->countAllResults();
        $komplain = $caring->countAllResults();
        $cabut = $caring->countAllResults();
        $pda = $caring->countAllResults();
        $cpsalah = $caring->countAllResults();
        $lunas = $caring->countAllResults();
        $upgrade = $caring->countAllResults();
        $downgrade = $caring->countAllResults();
        $kendalakeuangan = $caring->countAllResults();

        //data hasil visit
        $rna2 = $visit->countAllResults();
        $janjibayar2 = $visit->countAllResults();
        $komplain2 = $visit->countAllResults();
        $pda2 = $visit->countAllResults();
        $kendalakeuangan2 = $visit->countAllResults();
        $atk = $visit->countAllResults();
        $lunas2 = $visit->countAllResults();
        $sudahbayar = $visit->countAllResults();
        $tidakmaubayar = $visit->countAllResults();
        $rutup = $visit->countAllResults();

        $data = [
            //data hasil caring
            'title' => 'Dashboard',
            'janjibayar' => $janjibayar,
            'rna' => $rna,
            'komplain' => $komplain,
            'cabut' => $cabut,
            'pda' => $pda,
            'cpsalah' => $cpsalah,
            'lunas' => $lunas,
            'upgrade' => $upgrade,
            'downgrade' => $downgrade,
            'kendalakeuangan' => $kendalakeuangan,
            'upgrade' => $upgrade,

            //data hasil visit
            'rna2' => $rna2,
            'janjibayar2' => $janjibayar2,
            'komplain2' => $komplain2,
            'pda2' => $pda2,
            'kendalakeuangan2' => $kendalakeuangan2,
            'atk' => $atk,
            'lunas2' => $lunas2,
            'sudahbayar' => $sudahbayar,
            'tidakmaubayar' => $tidakmaubayar,
            'rutup' => $rutup,

        ];
        if (session()->logged_in) return view('dashboard/dashboard', $data);
        else return redirect()->to('login');
    }
}
