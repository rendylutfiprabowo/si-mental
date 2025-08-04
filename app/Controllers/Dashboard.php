<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgenModel;
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
        // AMBIL DATA DARI MODEL
        $caring1 = new Caring1();
        $caring2 = new Caring2();
        $visit1 = new Visit1();
        $visit2 = new Visit2();

        $caringPerDay = [
            'M' => 0,
            'T' => 0,
            'W' => 0,
            'T2' => 0,
            'F' => 0,
            'S' => 0,
            'S2' => 0
        ];

        // Helper function
        function getDayCode($date)
        {
            $map = ['Mon' => 'M', 'Tue' => 'T', 'Wed' => 'W', 'Thu' => 'T2', 'Fri' => 'F', 'Sat' => 'S', 'Sun' => 'S2'];
            return $map[date('D', strtotime($date))];
        }

        foreach ($caring1->findAll() as $c1) {
            $day = getDayCode($c1['tanggal']);
            $caringPerDay[$day]++;
        }

        foreach ($caring2->findAll() as $c2) {
            $day = getDayCode($c2['tanggal']);
            $caringPerDay[$day]++;
        }

        // Urutkan kembali sesuai label grafik: M, T, W, T, F, S, S
        $labels = ['M', 'T', 'W', 'T2', 'F', 'S', 'S2'];
        $chartData = [];
        foreach ($labels as $label) {
            $chartData[] = $caringPerDay[$label];
        }

        $visitPerMonth = [
            'Jan' => 0,
            'Feb' => 0,
            'Mar' => 0,
            'Apr' => 0,
            'May' => 0,
            'Jun' => 0,
            'Jul' => 0,
            'Aug' => 0,
            'Sep' => 0,
            'Oct' => 0,
            'Nov' => 0,
            'Dec' => 0
        ];

        function getMonthName($tanggal)
        {
            return date('M', strtotime($tanggal));
        }

        foreach ($visit1->findAll() as $v1) {
            $month = getMonthName($v1['tanggal_visit']);
            $visitPerMonth[$month]++;
        }
        foreach ($visit2->findAll() as $v2) {
            $month = getMonthName($v2['tanggal_visit']);
            $visitPerMonth[$month]++;
        }

        $orderedMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $visitChartData = [];
        foreach ($orderedMonths as $m) {
            $visitChartData[] = $visitPerMonth[$m];
        }

       
        //DATA HASIL CARING 1 BULAN
        $jumlahdatacaring1 = $caring1->countAllResults();
        $DBC1 = $caring1->findAll();

        //DATA HASIL CARING 2 BULAN
        $jumlahdatacaring2 = $caring2->countAllResults();
        $DBC2 = $caring2->findAll();

        //TOTAL HASIL CARING
        $totaljumlahdatacaring = $jumlahdatacaring1 + $jumlahdatacaring2;

        //DATA HASIL VISIT 1 BULAN
        $jumlahdatavisit1 = $visit1->countAllResults();
        $VBC1 = $visit1->findAll();

        //DATA HASIL VISIT 2 BULAN
        $jumlahdatavisit2 = $visit2->countAllResults();
        $VBC2 = $visit2->findAll();

        //TOTAL HASIL VISIT
        $totaljumlahdatavisit = $jumlahdatavisit1 + $jumlahdatavisit2;

        //TOTAL AGEN OBC
        $agenModel = new \App\Models\AgenModel();
        $totalagen = $agenModel->countAllResults();


        $data = [
            'chartData' => json_encode($chartData),
            'totaljumlahdatacaring' => array_sum($chartData),
            'chartVisit' => json_encode($visitChartData),
            'totaljumlahdatavisit' => array_sum($visitChartData),

            //DATA HASIL CARING 1 BULAN
            'title' => 'Dashboard',
            'jumlahdatacaring1' => $jumlahdatacaring1,
            'DBC1' => $DBC1,

            //DATA HASIL CARING 2 BULAN
            'jumlahdatacaring2' => $jumlahdatacaring2,
            'DBC2' => $DBC2,

            //DATA HASIL CARING 1 BULAN
            'jumlahdatavisit1' => $jumlahdatavisit1,
            'VBC1' => $VBC1,

            //DATA HASIL CARING 2 BULAN
            'jumlahdatavisit2' => $jumlahdatavisit2,
            'VBC2' => $VBC2,

            //TOTAL HASIL CARING DAN VISIT
            'totaljumlahdatacaring' => $totaljumlahdatacaring,
            'totaljumlahdatavisit' => $totaljumlahdatavisit,

            'totalagen' => $totalagen,


        ];
        if (session()->logged_in) return view('dashboard/dashboard', $data);
        else return redirect()->to('login');
    }
}
