<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HubYbs extends Seeder
{
    public function run()
    {
        $data = [
            [
                'hub_ybs' => 'TIDAK DIKENAL'
            ],
            [
                'hub_ybs' => 'ANAK'
            ],
            [
                'hub_ybs' => 'AYAH'
            ],
            [
                'hub_ybs' => 'IBU'
            ],
            [
                'hub_ybs' => 'PAMAN'
            ],
            [
                'hub_ybs' => 'BIBI'
            ],
            [
                'hub_ybs' => 'TETANGGA'
            ],
            [
                'hub_ybs' => 'KAKEK'
            ],
            [
                'hub_ybs' => 'NENEK'
            ]
        ];
        $this->db->table('hub_ybs')->insertBatch($data);
    }
}
