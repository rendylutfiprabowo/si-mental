<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgenModel;

class Dataagen extends BaseController
{
    public function listdata()
    {
        $detailModel = new AgenModel();
        $Agen = $detailModel->findAll();
        $data = [
            'title' => 'Data Agen',
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

    public function update($id)
    {
        $nama   = $this->request->getPost('nama');
        $jumlah_pelanggan   = $this->request->getPost('jumlah_pelanggan');
        $performance  = $this->request->getPost('performance');

        $data = [
            'nama' => $nama,
            'jumlah_pelanggan' => $jumlah_pelanggan,
            'performance' => $performance,

        ];
        $userModel = new AgenModel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return $this->detail($id);
        } else {
            return $this->detail($id);
        }
    }
}
