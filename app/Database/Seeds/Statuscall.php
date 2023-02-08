<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Statuscall extends Seeder
{
    public function run()
    {
        $data = [
            [
                'statuscall' => 'CONTACTED',
            ],
            [
                'statuscall' => 'NOT CONTACTED',
            ],


        ];
        $this->db->table('statuscall')->insertBatch($data);
    }
}
