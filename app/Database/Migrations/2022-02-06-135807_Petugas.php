<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Petugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_petugas' => [
                'type' => 'int',
                'constraint' => 11,

            ],

            'username' => [
                'type' => 'varchar',
                'constraint' => 25,
            ],

            'password' => [
                'type' => 'varchar',
                'constraint' => 32,
            ],

            'nama_petugas' => [
                'type' => 'varchar',
                'constraint' => 35,
            ],

            'level' => [
                'enum' => ['admin', 'staff'],
            ],

        ]);
        $this->forge->addKey('id_petugas', true);
        $this->forge->createTable('petugas');
    }

    public function down()
    {
        $this->forge->dropTable('petugas');
    }
}
