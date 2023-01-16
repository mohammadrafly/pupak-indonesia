<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class GroupTanaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_tanaman' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'id_pupukobat' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('id_tanaman');
        $this->forge->addKey('id_pupukobat');
        $this->forge->createTable('tanaman_group');
    }

    public function down()
    {
        $this->forge->dropTable('tanaman_group');
    }
}
