<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_visit' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_agen' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_pelanggan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_agen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hasil_visit' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('id_visit', true);
        $this->forge->createTable('visit');
    }

    public function down()
    {
        $this->forge->dropTable('visit');
    }
}
