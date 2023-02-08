<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Statuscall extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'statuscall' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->createTable('statuscall');
    }

    public function down()
    {
        $this->forge->dropTable('statuscall');
    }
}
