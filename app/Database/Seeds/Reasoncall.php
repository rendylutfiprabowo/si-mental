<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Reasoncall extends Seeder
{
    public function run()
    {
        $data = [
            [
                'reasoncall' => 'CALL REJECTED',
            ],
            [
                'reasoncall' => 'INACTIVE NUMBER',
            ],
            [
                'reasoncall' => 'MAIL BOX-MEMO',
            ],
            [
                'reasoncall' => 'NADA SIBUK',
            ],
            [
                'reasoncall' => 'RNA',
            ],
            [
                'reasoncall' => 'SALAH SAMBUNG',
            ],
            [
                'reasoncall' => 'SETUJU',
            ],
            [
                'reasoncall' => 'SIBUK',
            ],

        ];
        $this->db->table('reasoncall')->insertBatch($data);
    }
}
