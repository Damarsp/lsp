<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kelas' => [
                'type' => 'int',
                'constraint' => 11,
            ],

            'nama_kelas' => [
                'type' => 'varchar',
                'constraint' => 10,
            ],

            'kopetensi_keahlian' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],

        ]);
        $this->forge->addKey('id_kelas', true);
        $this->forge->createTable('kelas');
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
