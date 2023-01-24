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

    public function edit($id)
    {

        if (session()->logged_in) {
            $detailModel = new DetPel();
            $detpel = $detailModel->find($id);
            $data = [
                'detpel' => $detpel,
            ];
            return view('mcaring/edit', $data);
        } else return redirect()->to('login');
    }

    public function update($id)
    {
        $nomor_jastel   = $this->request->getPost('nomor_jastel');
        $contact   = $this->request->getPost('contact');
        $nama   = $this->request->getPost('nama');
        $hasil_greeting   = $this->request->getPost('hasil_greeting');
        $profil_kesepakatan   = $this->request->getPost('profil_kesepakatan');
        $agen_pengelola  = $this->request->getPost('agen_pengelola');
        $produk   = $this->request->getPost('produk');
        $alamat   = $this->request->getPost('alamat');
        $statuscall   = $this->request->getPost('statuscall');
        $reasoncall   = $this->request->getPost('reasoncall');
        $penerima_telpon   = $this->request->getPost('penerima_telpon');
        $hub_ybs   = $this->request->getPost('hub_ybs');
        $kendala_pelanggan   = $this->request->getPost('kendala_pelanggan');
        $hasil_caring   = $this->request->getPost('hasil_caring');

        $data = [
            'nomor_jastel' => $nomor_jastel,
            'contact' => $contact,
            'nama' => $nama,
            'hasil_greeting' => $hasil_greeting,
            'profil_kesepakatan' => $profil_kesepakatan,
            'agen_pengelola' => $agen_pengelola,
            'produk' => $produk,
            'alamat' => $alamat,
            'statuscall' => $statuscall,
            'reasoncall' => $reasoncall,
            'penerima_telpon' => $penerima_telpon,
            'hub_ybs' => $hub_ybs,
            'kendala_pelanggan' => $kendala_pelanggan,
            'hasil_caring' => $hasil_caring,

        ];
        $userModel = new DetPel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return $this->detail($id);
        } else {
            return $this->detail($id);
        }
    }
}
