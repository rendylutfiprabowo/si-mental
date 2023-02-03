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
            'nomor_jastel' => '1053',
            'contact' => '088269638116',
            'nama_agen' => 'Arman',
            'nama' => 'Rendy Lutfi Prabowo',
            'alamat' => 'Prabumulih',
            'alamat_baru' =>'Bandarlampung',
            'STO' => 'Bandarlampung',
            'datel' => 'Bandarlampung',
            'hasil_visit' => 'Berantem',
            'ket_visit' => 'iya gitu deh'
        ];
        $this->db->table('visit')->insertBatch($data);
    }
}
