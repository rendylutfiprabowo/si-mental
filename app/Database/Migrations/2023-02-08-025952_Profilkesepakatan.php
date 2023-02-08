<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profilkesepakatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'profil_kesepakatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->createTable('profil_kesepakatan');
    }

    public function down()
    {
        $this->forge->dropTable('profil_kesepakatan');
    }
}
