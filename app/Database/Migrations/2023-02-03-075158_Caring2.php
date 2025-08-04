<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Caring2 extends Migration
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
            'produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'STO' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'datel' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'statuscall' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'constraint' => NULL,
            ],
            'reasoncall' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'penerima_telpon' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
                'default' => 'YBS',
            ],
            'hub_ybs' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'kendala_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'hasil_caring' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],


        ]);
        $this->forge->addKey('id_pelanggan', true);
        $this->forge->createTable('caring2');
    }

    public function down()
    {
        $this->forge->dropTable('caring2');
    }
}
