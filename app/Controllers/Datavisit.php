<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VisitModel;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        $detailModel = new VisitModel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        $data = [
            'title' => 'Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/satubulan', $data);
        else return redirect()->to('login');
    }

    public function duabulan()
    {

        $detailModel = new VisitModel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        // dd($ctb);
        $data = [
            'title' => 'Visit',
            'ctb' => $ctb
        ];
        // return view('mvisit/duabulan');
        if (session()->logged_in)  return view('mvisit/duabulan', $data);
        else return redirect()->to('login');
    }

    public function detail()
    {
        $detailModel = new VisitModel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        // dd($ctb);
        $data = [
            'title' => 'Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/detail', $data);
        else return redirect()->to('login');
    }

    public function edit()
    {
        $detailModel = new VisitModel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        $data = [
            'title' => 'Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/edit', $data);
        else return redirect()->to('login');
    }

    public function export()
    {

    }

    public function import()
    {
        
    }
}
