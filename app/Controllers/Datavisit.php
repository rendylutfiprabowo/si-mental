<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VisitModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Datavisit extends BaseController
{
    public function satubulan()
    {
        $detailModel = new VisitModel();
        // $array = ['MONTH(tanggal)>' => 'MONTH(now())'];
        $ctb = $detailModel->findAll();
        $data = [
            'title' => 'Data Visit',
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
            'title' => 'Data Visit',
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
            'title' => 'Data Visit',
            'ctb' => $ctb
        ];
        if (session()->logged_in)  return view('mvisit/detail', $data);
        else return redirect()->to('login');
    }

    public function edit($id)
    {
        if (session()->logged_in) {
            $detailModel = new VisitModel();
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
        $userModel = new VisitModel();

        $result =  $userModel->update($id, $data);
        if ($result) {
            return $this->detail($id);
        } else {
            return $this->detail($id);
        }
    }
    public function export()
    {
        $detailModel = new VisitModel();

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
    }
}
