<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Caring1;
use App\Models\Caring2;
use App\Models\Visit1;
use App\Models\Visit2;

class Dashboard extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //DATA HASIL CARING 1 BULAN
        $caring1 = new Caring1();

        //DATA HASIL CARING 2 BULAN
        $caring2 = new Caring2();

        //DATA HASIL VISIT 1 BULAN
        $visit1 = new Visit1();

        //DATA HASIL VISIT 2 BULAN
        $visit2 = new Visit2();

        //DATA HASIL CARING 1 BULAN
        $jumlahdatacaring1 = $caring1->countAllResults();
        $DBC = $caring1->findAll();

        //DATA HASIL CARING 2 BULAN
        $jumlahdatacaring = $caring2->countAllResults();
        $DBC2 = $caring2->findAll();

        //DATA HASIL VISIT 1 BULAN
        $jumlahdatavisit1 = $visit1->countAllResults();
        $VBC = $visit1->findAll();

        //DATA HASIL VISIT 2 BULAN
        $jumlahdatavisit = $visit2->countAllResults();
        $VBC2 = $visit2->findAll();

        $data = [
            //DATA HASIL CARING 1 BULAN
            'title' => 'Dashboard',
            'jumlahdatacaring1' => $jumlahdatacaring1,
            'DBC' => $DBC,

            //DATA HASIL CARING 2 BULAN
            'jumlahdatacaring' => $jumlahdatacaring,
            'DBC2' => $DBC2,

            //DATA HASIL CARING 1 BULAN
            'jumlahdatavisit' => $jumlahdatavisit,
            'VBC' => $VBC,

            //DATA HASIL CARING 2 BULAN
            'jumlahdatavisit' => $jumlahdatavisit,
            'VBC2' => $VBC2,

        ];
        if (session()->logged_in) return view('dashboard/dashboard', $data);
        else return redirect()->to('login');
    }
}
