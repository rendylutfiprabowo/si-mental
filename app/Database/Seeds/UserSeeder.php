<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('admin')->insertBatch($data);

        echo "✅ Admin user inserted\n";
    }
}
