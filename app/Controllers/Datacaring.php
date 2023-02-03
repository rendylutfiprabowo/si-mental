<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetPel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Datacaring extends BaseController
{


    public function satubulan()
    {
        $detailModel = new DetPel();
        $array = ['((YEAR(now()) * 12) + MONTH(now()) - (YEAR(tanggal) * 12) + MONTH(tanggal)) > ' => '1'];
        $detpel = $detailModel->where($array)->find();
        $data = [
            'title' => 'Data Caring',
            'detpel' => $detpel
        ];
        if (session()->logged_in)  return view('mcaring/satubulan', $data);
        else return redirect()->to('login');
    }

    public function duabulan()
    {
        $detailModel = new DetPel();
        $array = ['((YEAR(now()) * 12) + MONTH(now()) - (YEAR(tanggal) * 12) + MONTH(tanggal)) > ' => '2'];
        $detpel = $detailModel->where($array)->find();
        $data = [
            'title' => 'Data Caring',
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
            'title' => 'Data Caring',
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
                'title' => 'Data Caring',
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
        $STO   = $this->request->getPost('STO');
        $datel   = $this->request->getPost('datel');
        $statuscall   = $this->request->getPost('statuscall');
        $tanggal   = $this->request->getPost('tanggal');
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
            'STO' => $STO,
            'datel' => $datel,
            'statuscall' => $statuscall,
            'tanggal' => $tanggal,
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

    public function export()
    {
        $detailModel = new DetPel();

        $pelanggan = $detailModel->findAll();
        // $db = \config\Database::connect();
        // $builder = $db->table('pelanggan');
        // $builder->join('');

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nomor jastel');
        $sheet->setCellValue('C1', 'nama');
        $sheet->setCellValue('D1', 'contact');
        $sheet->setCellValue('E1', 'hasil greeting');
        $sheet->setCellValue('F1', 'profil kesepakatan');
        $sheet->setCellValue('G1', 'agen pengelola');
        $sheet->setCellValue('H1', 'produk');
        $sheet->setCellValue('I1', 'alamat');
        $sheet->setCellValue('J1', 'STO');
        $sheet->setCellValue('K1', 'datel');
        $sheet->setCellValue('L1', 'statuscall');
        $sheet->setCellValue('M1', 'tanggal');
        $sheet->setCellValue('N1', 'reasoncall');
        $sheet->setCellValue('O1', 'penerima telpon');
        $sheet->setCellValue('P1', 'hub ybs');
        $sheet->setCellValue('Q1', 'kendala pelanggan');
        $sheet->setCellValue('R1', 'hasil caring');

        $column = 2;
        foreach ($pelanggan as $dt) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $dt['nomor_jastel']);
            $sheet->setCellValue('C' . $column, $dt['contact']);
            $sheet->setCellValue('D' . $column, $dt['nama']);
            $sheet->setCellValue('E' . $column, $dt['hasil_greeting']);
            $sheet->setCellValue('F' . $column, $dt['profil_kesepakatan']);
            $sheet->setCellValue('G' . $column, $dt['agen_pengelola']);
            $sheet->setCellValue('H' . $column, $dt['produk']);
            $sheet->setCellValue('I' . $column, $dt['alamat']);
            $sheet->setCellValue('J' . $column, $dt['STO']);
            $sheet->setCellValue('K' . $column, $dt['datel']);
            $sheet->setCellValue('L' . $column, $dt['statuscall']);
            $sheet->setCellValue('M' . $column, $dt['tanggal']);
            $sheet->setCellValue('N' . $column, $dt['reasoncall']);
            $sheet->setCellValue('O' . $column, $dt['penerima_telpon']);
            $sheet->setCellValue('P' . $column, $dt['hub_ybs']);
            $sheet->setCellValue('Q' . $column, $dt['kendala_pelanggan']);
            $sheet->setCellValue('R' . $column, $dt['hasil_caring']);
            $column++;
        }

        $sheet->getStyle('A1:R1')->getFont()->setBold(true);
        $sheet->getstyle('A1:R1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFFFFF00');
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $sheet->getStyle('A1:R' . ($column - 1))->applyFromArray($styleArray);

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        $sheet->getColumnDimension('L')->setAutoSize(true);
        $sheet->getColumnDimension('M')->setAutoSize(true);
        $sheet->getColumnDimension('N')->setAutoSize(true);
        $sheet->getColumnDimension('O')->setAutoSize(true);
        $sheet->getColumnDimension('P')->setAutoSize(true);
        $sheet->getColumnDimension('Q')->setAutoSize(true);
        $sheet->getColumnDimension('R')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=pelanggan.xls');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function import()
    {
        $detailModel = new DetPel();

        $file = $this->request->getFile('fileexcel');
        $file->move(ROOTPATH . 'public/uploads');
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load(ROOTPATH . 'public/uploads/' . $file->getName());
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $data = [];
        $i = 0;
        foreach ($sheetData as $dt) {
            $data[$i]['nomor_jastel'] = $dt[0];
            $data[$i]['contact'] = $dt[1];
            $data[$i]['nama'] = $dt[2];
            $data[$i]['hasil_greeting'] = $dt[3];
            $data[$i]['profil_kesepakatan'] = $dt[4];
            $data[$i]['agen_pengelola'] = $dt[5];
            $data[$i]['produk'] = $dt[6];
            $data[$i]['alamat'] = $dt[7];
            $data[$i]['STO'] = $dt[8];
            $data[$i]['datel'] = $dt[9];
            $data[$i]['statuscall'] = $dt[10];
            $data[$i]['tanggal'] = $dt[11];
            $data[$i]['reasoncall'] = $dt[12];
            $data[$i]['penerima_telpon'] = $dt[13];
            $data[$i]['hub_ybs'] = $dt[14];
            $data[$i]['kendala_pelanggan'] = $dt[15];
            $data[$i]['hasil_caring'] = $dt[16];
            $i++;
        }

        $detailModel->insertBatch($data);
        return redirect()->to('/datapelanggan/caring/satubulan');
    }
}
