<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Equipe extends Migration
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
            'projeto_id'       => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'       => true,
            ],
            'funcionario_id'       => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'       => true,
            ],
            'data_inicio'       => [
                'type'       => 'DATE',                
            ],
            'horas_trabalhadas'       => [
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
        $this->forge->addForeignKey('projeto_id','projeto','id');
        $this->forge->addForeignKey('funcionario_id','funcionario','id');
        $this->forge->createTable('equipe');
    }

    public function down()
    {
        $this->forge->dropTable('equipe');
    }
}
