<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Projeto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'orcamento'       => [
                'type'       => 'DOUBLE',
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('projeto');
    }

    public function down()
    {
        $this->forge->dropTable('projeto');
    }
}
