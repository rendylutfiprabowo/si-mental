<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ImportExcelSeeder extends Seeder
{
    public function run()
    {
        // Map file Excel ke nama tabel
        $files = [
            FCPATH . 'uploads/CARING_DUMMY1.xlsx' => 'caring1',
            FCPATH . 'uploads/CARING_DUMMY2.xlsx' => 'caring2',
            FCPATH . 'uploads/VISIT_DUMMY1.xlsx'  => 'visit1',
            FCPATH . 'uploads/VISIT_DUMMY2.xlsx'  => 'visit2',
        ];


        foreach ($files as $file => $table) {
            $this->importExcelToTable($table, $file);
        }
    }

    protected function importExcelToTable($tableName, $filePath)
    {
        // Cek apakah file ada


        if (!file_exists($filePath)) {
            echo "❌ File tidak ditemukan: $filePath\n";
            return;
        } else {
            echo "✅ File ditemukan: $filePath\n";
        }


        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        $db = \Config\Database::connect();
        $builder = $db->table($tableName);

        // Ambil header kolom
        $header = array_shift($rows);
        $fields = array_values($header); // ambil nilai kolom (mis. A => "nama", B => "alamat", dst)

        foreach ($rows as $row) {
            $data = [];

            foreach ($fields as $index => $field) {
                $colKey = array_keys($row)[$index]; // mis. A, B, C...
                $data[$field] = $row[$colKey];
            }

            // Masukkan ke tabel
            $builder->insert($data);
        }

        echo "Data berhasil diimpor ke tabel: $tableName\n";
    }
}
