<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HubYbs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'hub_ybs' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],

        ]);
        $this->forge->createTable('hub_ybs');
    }

    public function down()
    {
        $this->forge->dropTable('hub_ybs');
    }
}
