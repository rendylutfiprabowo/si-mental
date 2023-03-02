<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Caring1;
use App\Models\Caring2;
use App\Models\Visit1;
use App\Models\Visit2;
use App\Models\AgenModel;

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

        //DATA AGEN
        $agen = new AgenModel();

        //DATA HASIL CARING 1 BULAN
        $jumlahdatacaring = $caring1->countAllResults();
        $DBC = $caring1->findAll();

        //DATA HASIL CARING 2 BULAN
        $jumlahdatacaring2 = $caring2->countAllResults();
        $DBC2 = $caring2->findAll();

        //DATA HASIL VISIT 1 BULAN
        $jumlahdatavisit = $visit1->countAllResults();
        $VBC = $visit1->findAll();

        //DATA HASIL VISIT 2 BULAN
        $jumlahdatavisit2 = $visit2->countAllResults();
        $VBC2 = $visit2->findAll();

        //DATA AGEN
        $dataagen = $agen->countAllResults();
        $obc = $agen->findAll();

        //JUMLAH HASIL CARING
        $sumJumlahDataCaring = $jumlahdatacaring + $jumlahdatacaring2;

        //JUMLAH HASIL VISIT
        $sumjumlahvisit = $jumlahdatavisit + $jumlahdatavisit2;


        $profk = $caring1->getProfk();
        $profk2 = $caring2->getProfk();
        $hvisit = $visit1->getHvisit();
        $hvisit2 = $visit2->getHvisit();
        $data = [
            //DATA HASIL CARING 1 BULAN
            'title' => 'Dashboard',
            'jumlahdatacaring' => $jumlahdatacaring,
            'DBC' => $DBC,

            //DATA HASIL CARING 2 BULAN
            'jumlahdatacaring2' => $jumlahdatacaring2,
            'DBC2' => $DBC2,

            //JUMLAH HASIL CARING
            'sumJumlahDataCaring' => $sumJumlahDataCaring,

            //JUMLAH HASIL VISIT
            'sumjumlahvisit' => $sumjumlahvisit,

            //DATA HASIL VISIT 1 BULAN
            'jumlahdatavisit' => $jumlahdatavisit,
            'VBC' => $VBC,

            //DATA HASIL VISIT 2 BULAN
            'jumlahdatavisit2' => $jumlahdatavisit2,
            'VBC2' => $VBC2,

            //DATA AGEN
            'dataagen' => $dataagen,
            'obc' => $obc,

            'profk' => $profk,
            'profk2' => $profk2,
            'hvisit' => $hvisit,
            'hvisit2' => $hvisit2,

        ];
        if (session()->logged_in) return view('dashboard/dashboard', $data);
        else return redirect()->to('login');
    }
}