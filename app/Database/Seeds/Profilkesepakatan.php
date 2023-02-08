<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Profilkesepakatan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'profil_kesepakatan' => 'BUKAN YBS'
            ],
            [
                'profil_kesepakatan' => 'BUSY'
            ],
            [
                'profil_kesepakatan' => 'DOWNGRADE'
            ],
            [
                'profil_kesepakatan' => 'KOMPLAIN'
            ],
            [
                'profil_kesepakatan' => 'CP SALAH'
            ],
            [
                'profil_kesepakatan' => 'SALAH SAMBUNG'
            ],
            [
                'profil_kesepakatan' => 'RNA'
            ],
            [
                'profil_kesepakatan' => 'LUNAS'
            ],
            [
                'profil_kesepakatan' => 'PDA'
            ],
            [
                'profil_kesepakatan' => 'KENDALA KEUANGAN'
            ],
            [
                'profil_kesepakatan' => 'JANJI BAYAR'
            ],
            [
                'profil_kesepakatan' => 'KELUAR KOTA'
            ],
            [
                'profil_kesepakatan' => 'TUNDA BAYAR'
            ],
            [
                'profil_kesepakatan' => 'UPGRADE'
            ],
            [
                'profil_kesepakatan' => 'MINTA CABUT'
            ],
            [
                'profil_kesepakatan' => 'CABUT'
            ],
            [
                'profil_kesepakatan' => 'ISOLIR APS'
            ],
            [
                'profil_kesepakatan' => 'MINTA PINDAH'
            ],

        ];
        $this->db->table('profil_kesepakatan')->insertBatch($data);
    }
}
