<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgenModel;

class Dataagenobc extends BaseController
{
    public function listdata()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'AgenOBC',
            'Agen' => $Agen
        ];
        if (session()->logged_in)  return view('mobc/listdata', $data);
        else return redirect()->to('login');
    }

    public function detail()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'AgenOBC',
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
            'title' => 'AgenOBC',
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
            'title' => 'AgenOBC',
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
