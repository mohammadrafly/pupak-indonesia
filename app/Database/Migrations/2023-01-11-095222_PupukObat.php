<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class PupukObat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pupuk' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pupuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'TEXT',
                'constraint' => '255',
            ],
            'berat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',  
            ],
            'harga' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_pupuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanaman_tags' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'picture' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_pupuk', true);
        $this->forge->addKey('tanaman_tags');
        $this->forge->createTable('pupukobat');
    }

    public function down()
    {
        $this->forge->dropTable('pupukobat');
    }
}
