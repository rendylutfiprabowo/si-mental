<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reasoncall extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'reasoncall' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->createTable('reasoncall');
    }

    public function down()
    {
        $this->forge->dropTable('reasoncall');
    }
}
