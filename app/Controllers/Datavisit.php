<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VisitModel;
use App\Models\Visit1;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Datavisit extends BaseController
{

    public function clearData()
    {
        $detailModel = new Visit1();
        $detailModel->truncate(); // hapus semua data

        return redirect()->back()->with('message', 'Data berhasil dikosongkan.');
    }

    public function satubulan()
    {
        $detailModel = new Visit1();
        $array = ['((YEAR(now()) * 12) + MONTH(now()) - (YEAR(tanggal_visit) * 12) + MONTH(tanggal_visit)) > ' => '1'];
        $ctb = $detailModel->where($array)->find();
        $data = [
            'title' => 'Data Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/satubulan', $data);
        else return redirect()->to('login');
    }

    public function detail()
    {
        $detailModel = new Visit1();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        // dd($ctb);
        $data = [
            'title' => 'Data Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/detail', $data);
        else return redirect()->to('login');
    }

    public function edit($id)
    {
        if (session()->logged_in) {
            $detailModel = new Visit1();
            $ctb = $detailModel->find($id);
            $data = [
                'title' => 'Data Visit',
                'ctb' => $ctb,
            ];
            return view('mvisit/edit', $data);
        } else return redirect()->to('login');
    }

    public function update($id)
    {
        $nomor_jastel   = $this->request->getPost('nomor_jastel');
        $nama   = $this->request->getPost('nama');
        $contact   = $this->request->getPost('contact');
        $nama_agen   = $this->request->getPost('nama_agen');
        $tanggal_visit   = $this->request->getPost('tanggal_visit');
        $alamat  = $this->request->getPost('alamat');
        $alamat_baru   = $this->request->getPost('alamat_baru');
        $STO   = $this->request->getPost('STO');
        $datel   = $this->request->getPost('datel');
        $hasil_visit   = $this->request->getPost('hasil_visit');
        $ket_visit   = $this->request->getPost('ket_visit');

        $data = [
            'nomor_jastel' => $nomor_jastel,
            'nama' => $nama,
            'contact ' => $contact,
            'nama_agen ' => $nama_agen,
            'tanggal_visit' => $tanggal_visit,
            'alamat' => $alamat,
            'alamat_baru' => $alamat_baru,
            'STO' => $STO,
            'datel' => $datel,
            'hasil_visit' => $hasil_visit,
            'ket_visit' => $ket_visit,

        ];
        $userModel = new Visit1();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return $this->detail($id);
        } else {
            return $this->detail($id);
        }
    }

    public function delete($id)
    {
        $satuVisit = new Visit1();
        $satuVisit->delete($id);

        return redirect()->to('/datapelanggan/visit/satubulan');
    }

    public function export()
    {
        $detailModel = new Visit1();

        $visit = $detailModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nomor Jastel');
        $sheet->setCellValue('C1', 'Nama Pelanggan');
        $sheet->setCellValue('D1', 'Kontak Pelanggan');
        $sheet->setCellValue('E1', 'Nama Agen');
        $sheet->setCellValue('F1', 'Tanggal Visit');
        $sheet->setCellValue('G1', 'Alamat Pelanggan');
        $sheet->setCellValue('H1', 'Alamat Baru Pelanggan');
        $sheet->setCellValue('I1', 'STO');
        $sheet->setCellValue('J1', 'datel');
        $sheet->setCellValue('K1', 'Hasil Visit');
        $sheet->setCellValue('L1', 'Keterangan Visit');

        $column = 2;
        foreach ($visit as $dt) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $dt['nomor_jastel']);
            $sheet->setCellValue('C' . $column, $dt['nama']);
            $sheet->setCellValue('D' . $column, $dt['contact']);
            $sheet->setCellValue('E' . $column, $dt['nama_agen']);
            $sheet->setCellValue('F' . $column, $dt['tanggal_visit']);
            $sheet->setCellValue('G' . $column, $dt['alamat']);
            $sheet->setCellValue('H' . $column, $dt['alamat_baru']);
            $sheet->setCellValue('I' . $column, $dt['STO']);
            $sheet->setCellValue('J' . $column, $dt['datel']);
            $sheet->setCellValue('K' . $column, $dt['hasil_visit']);
            $sheet->setCellValue('L' . $column, $dt['ket_visit']);
            $column++;
        }

        $sheet->getStyle('A1:L1')->getFont()->setBold(true);
        $sheet->getStyle('A1:L1')->getFill()
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
        $sheet->getStyle('A1:L' . ($column - 1))->applyFromArray($styleArray);

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

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=visit.xls');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }

    public function import()
    {
        $detailModel = new Visit1();

        $file = $this->request->getFile('fileexcel');
        $file->move(ROOTPATH . 'public/uploads');
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load(ROOTPATH . 'public/uploads/' . $file->getName());
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        $data = [];
        $v = 1;
        $x = 0;
        foreach ($sheetData as $dt) {
            $x++;
            if ($x == 1) {
                continue;
            }
            $data[$v]['nomor_jastel'] = $dt[1];
            $data[$v]['nama'] = $dt[2];
            $data[$v]['contact'] = $dt[3];
            $data[$v]['nama_agen'] = $dt[4];
            $data[$v]['tanggal_visit'] = $dt[5];
            $data[$v]['alamat'] = $dt[6];
            $data[$v]['alamat_baru'] = $dt[7];
            $data[$v]['STO'] = $dt[8];
            $data[$v]['datel'] = $dt[9];
            $data[$v]['hasil_visit'] = $dt[10];
            $data[$v]['ket_visit'] = $dt[11];
            $v++;
        }

        $detailModel->insertBatch($data);
        return redirect()->to('/datapelanggan/visit/satubulan');
    }
}
