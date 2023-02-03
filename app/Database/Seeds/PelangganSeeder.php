<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nomor_jastel' => '1',
            'nama' => 'Rendy Lutfi Prabowo',
            'contact' => '0882',
            'hasil_greeting' => '',
            'profil_kesepakatan' => '',
            'agen_pengelola' => 'Arman',
            'produk' => 'Indihome',
            'alamat' => 'Prabumulih',
            'STO' => 'palembang',
            'datel' => 'pbl',
            'statuscall' => 'Contacted',
            'tanggal' => 'Contacted',
            'reasoncall' => 'Janji Bayar',
            'hub_ybs' => '',
            'kendala_pelanggan' => 'Lupa Bayar',
            'hasil_caring' => 'Sore dibayar',

        ];
        $this->db->table('pelanggan')->insertBatch($data);
    }
}
