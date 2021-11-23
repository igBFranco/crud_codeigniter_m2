<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Funcionario extends Migration
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
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telefone'       => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'salario'       => [
                'type'       => 'DOUBLE',
            ],
            'departamento_id'       => [
                'type'       => 'INT',
                'constraint' => '5',
                'unsigned'       => true,
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('departamento_id','departamento','id');
        $this->forge->createTable('funcionario');
    }

    public function down()
    {
        $this->forge->dropTable('funcionario');
    }
}