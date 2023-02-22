<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgenModel;
use App\Models\Caring1;

class Dataagen extends BaseController
{
    public function listdata()
    {
        $detailModel = new AgenModel();
        $tes = new Caring1();
        $hitung = $tes->getCount();
        $agen1 = $tes->getCount2();  
        $contacted = $tes->getcontacted();
        $seluruh = $tes->countAll();
        // $Agen = $tes->findAll();
        $data = [
            'title' => 'Data Agen',
            
            'agen1' => $agen1,
            'hitung' => $hitung,
            'contacted' => $contacted,
            'seluruh' => $seluruh
        ];
        if (session()->logged_in)  return view('mobc/listdata', $data);
        else return redirect()->to('login');
    }

    public function detail()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'Data Agen',
            'Agen' => $Agen
        ];
        if (session()->logged_in)  return view('mobc/detail', $data);
        else return redirect()->to('login');
    }

    public function tambahdata()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'Data Agen',
            'Agen' => $Agen
        ];
        if (session()->logged_in)  return view('mobc/tambahdata', $data);
        else return redirect()->to('login');
    }

    public function hapusdata()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'Data Agen',
            'Agen' => $Agen
        ];
        if (session()->logged_in)  return view('mobc/hapusdata', $data);
        else return redirect()->to('login');
    }
    public function edit()
    {
        if (session()->logged_in)  return view('mobc/edit');
        else return redirect()->to('login');
    }
}
