<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetPel;

class Datacaring extends BaseController
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
        if (session()->logged_in)  return view('mcaring/satubulan', $data);
        else return redirect()->to('login');
    }

    public function duabulan()
    {
        $detailModel = new DetPel();
        $detpel = $detailModel->findAll();
        $data = [
            'title' => 'Pelanggan',
            'detpel' => $detpel
        ];
        if (session()->logged_in)  return view('mcaring/duabulan', $data);
        else return redirect()->to('login');
    }

    public function detail($id)
    {
        $detailModel = new DetPel();
        $detpel = $detailModel->find($id);
        $data = [
            'detpel' => $detpel,
        ];
        if (session()->logged_in)  return view('mcaring/detail', $data);
        else return redirect()->to('login');
    }

    public function edit()
    {
        if (session()->logged_in)  return view('mcaring/edit');
        else return redirect()->to('login');
    }
}
