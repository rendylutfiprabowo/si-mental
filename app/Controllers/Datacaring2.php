<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetPel;
use App\Models\Caring2;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Datacaring2 extends BaseController
{
    public function clearData()
    {
        $detailModel = new Caring2();
        $detailModel->truncate(); // hapus semua data

        return redirect()->back()->with('message', 'Data berhasil dikosongkan.');
    }

    public function duabulan()
    {
        $detailModel = new Caring2();
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
        $detailModel = new Caring2();
        $detpel = $detailModel->find($id);
        $data = [
            'title' => 'Data Caring',
            'detpel' => $detpel,
        ];
        if (session()->logged_in)  return view('mcaring/detail2', $data);
        else return redirect()->to('login');
    }

    public function edit($id)
    {

        if (session()->logged_in) {
            $detailModel = new Caring2();
            $detpel = $detailModel->find($id);
            $data = [
                'title' => 'Data Caring',
                'detpel' => $detpel,
            ];
            return view('mcaring/edit2', $data);
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
        $userModel = new Caring2();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return $this->detail($id);
        } else {
            return $this->detail($id);
        }
    }

    public function delete($id)
    {
        $duaModel = new Caring2();
        $duaModel->delete($id);

        return redirect()->to('/datapelanggan/caring/duabulan');
    }

    public function export()
    {
        $detailModel = new Caring2();

        $pelanggan = $detailModel->findAll();

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
            $sheet->setCellValue('C' . $column, $dt['nama']);
            $sheet->setCellValue('D' . $column, $dt['contact']);
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
        $detailModel = new Caring2();

        $file = $this->request->getFile('fileexcel');
        $file->move(ROOTPATH . 'public/uploads');
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load(ROOTPATH . 'public/uploads/' . $file->getName());
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $data = [];
        $i = 1;
        $x = 0;
        foreach ($sheetData as $dt) {
            $x++;
            if ($x == 1) {
                continue;
            }
            $data[$i]['nomor_jastel'] = $dt[1];
            $data[$i]['nama'] = $dt[2];
            $data[$i]['contact'] = $dt[3];
            $data[$i]['hasil_greeting'] = $dt[4];
            $data[$i]['profil_kesepakatan'] = $dt[5];
            $data[$i]['agen_pengelola'] = $dt[6];
            $data[$i]['produk'] = $dt[7];
            $data[$i]['alamat'] = $dt[8];
            $data[$i]['STO'] = $dt[9];
            $data[$i]['datel'] = $dt[10];
            $data[$i]['statuscall'] = $dt[11];
            $data[$i]['tanggal'] = $dt[12];
            $data[$i]['reasoncall'] = $dt[13];
            $data[$i]['penerima_telpon'] = $dt[14];
            $data[$i]['hub_ybs'] = $dt[15];
            $data[$i]['kendala_pelanggan'] = $dt[16];
            $data[$i]['hasil_caring'] = $dt[17];
            $i++;
        }

        $detailModel->insertBatch($data);
        return redirect()->to('/datapelanggan/caring/duabulan');
    }
}
