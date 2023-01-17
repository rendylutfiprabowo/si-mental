<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor_jastel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hasil_greeting' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'profil_kesepakatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'agen_pengelola' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('id_pelanggan', true);
        $this->forge->createTable('pelanggan');
    }

    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }
}
