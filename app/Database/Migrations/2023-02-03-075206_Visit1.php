<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visit1 extends Migration
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
            'nama_agen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal_visit' => [
                'type'       => 'DATE',
                'constraint' => NULL,
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat_baru' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'STO' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'datel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hasil_visit' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ket_visit' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id_visit', true);
        $this->forge->createTable('visit1');
    }

    public function down()
    {
        $this->forge->dropTable('visit1');
    }
}
