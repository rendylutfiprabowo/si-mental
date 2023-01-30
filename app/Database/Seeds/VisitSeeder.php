<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VisitSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_agen' => '1',
            'id_pelanggan' => '1',
            'nama_agen' => 'Arman',
            'nama_pelanggan' => 'Rendy Lutfi Prabowo',
            'jumlah_pelanggan' => '1',
            'hasil_visit' => 'Berantem',
        ];
        $this->db->table('visit')->insertBatch($data);
    }
}
