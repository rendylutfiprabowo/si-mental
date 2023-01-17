<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgenOBC extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_agen' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_customer' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('id_agen', true);
        $this->forge->createTable('agenobc');
    }

    public function down()
    {
        $this->forge->dropTable('agenobc');
    }
}
