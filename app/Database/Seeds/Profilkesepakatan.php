<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Profilkesepakatan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'profilkesepakatan' => 'BUKAN YBS'
            ],
            [
                'profilkesepakatan' => 'BUSY'
            ],
            [
                'profilkesepakatan' => 'DOWNGRADE'
            ],
            [
                'profilkesepakatan' => 'KOMPLAIN'
            ],
            [
                'profilkesepakatan' => 'CP SALAH'
            ],
            [
                'profilkesepakatan' => 'SALAH SAMBUNG'
            ],
            [
                'profilkesepakatan' => 'RNA'
            ],
            [
                'profilkesepakatan' => 'LUNAS'
            ],
            [
                'profilkesepakatan' => 'PDA'
            ],
            [
                'profilkesepakatan' => 'KENDALA KEUANGAN'
            ],
            [
                'profilkesepakatan' => 'JANJI BAYAR'
            ],
            [
                'profilkesepakatan' => 'KELUAR KOTA'
            ],
            [
                'profilkesepakatan' => 'TUNDA BAYAR'
            ],
            [
                'profilkesepakatan' => 'UPGRADE'
            ],
            [
                'profilkesepakatan' => 'MINTA CABUT'
            ],
            [
                'profilkesepakatan' => 'CABUT'
            ],
            [
                'profilkesepakatan' => 'ISOLIR APS'
            ],
            [
                'profilkesepakatan' => 'MINTA PINDAH'
            ],

        ];
        $this->db->table('profilkesepakatan')->insertBatch($data);
    }
}
