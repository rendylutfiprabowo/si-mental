<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profilkesepakatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'profilkesepakatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->createTable('profilkesepakatan');
    }

    public function down()
    {
        $this->forge->dropTable('profilkesepakatan');
    }
}
