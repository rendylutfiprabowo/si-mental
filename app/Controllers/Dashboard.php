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
        $jumlahdatacaring = $caring->countAllResults();
        $DBC = $caring->findAll();

        //data hasil visit
        $jumlahdatavisit = $visit->countAllResults();
        $VBC = $visit->findAll();

        $data = [
            //data hasil caring
            'title' => 'Dashboard',
            'jumlahdatacaring' => $jumlahdatacaring,
            'DBC' => $DBC,

            //data hasil visit
            'jumlahdatavisit' => $jumlahdatavisit,
            'VBC' => $VBC,

        ];
        if (session()->logged_in) return view('dashboard/dashboard', $data);
        else return redirect()->to('login');
    }
}
