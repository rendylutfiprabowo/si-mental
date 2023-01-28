<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetPel;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        $detailModel = new DetPel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $detpel = $detailModel->findAll();
        $data = [
            'title' => 'Pelanggan',
            'detpel' => $detpel
        ];
        if (session()->logged_in)  return view('mvisit/satubulan', $data);
        else return redirect()->to('login');
    }

    public function duabulan()
    {

        $detailModel = new DetPel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $detpel = $detailModel->findAll();
        $data = [
            'title' => 'Pelanggan',
            'detpel' => $detpel
        ];
        // return view('mvisit/duabulan');
        if (session()->logged_in)  return view('mvisit/duabulan', $data);
        else return redirect()->to('login');
    }

    public function detail()
    {
        $detailModel = new DetPel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $detpel = $detailModel->findAll();
        $data = [
            'title' => 'Pelanggan',
            'detpel' => $detpel
        ];
        if (session()->logged_in)  return view('mvisit/detail', $data);
        else return redirect()->to('login');
    }

    public function edit()
    {
        $detailModel = new DetPel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $detpel = $detailModel->findAll();
        $data = [
            'title' => 'Pelanggan',
            'detpel' => $detpel
        ];
        if (session()->logged_in)  return view('mvisit/edit', $data);
        else return redirect()->to('login');
    }
}
