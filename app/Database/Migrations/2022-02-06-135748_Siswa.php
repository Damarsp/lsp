<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nisn' => [
                'type' => 'char',
                'constraint' => 10,

            ],

            'nis' => [
                'type' => 'char',
                'constraint' => 8,
            ],

            'nama' => [
                'type' => 'varchar',
                'constraint' => 35,
            ],

            'id_kelas' => [
                'type' => 'int',
                'constraint' => 11,
            ],

            'alamat' => [
                'type' => 'text',
                'null' => true,
            ],

            'no_telp' => [
                'type' => 'varchar',
                'constraint' => 13,
            ],

            'id_spp' => [
                'type' => 'int',
                'constraint' => 11,
            ],

        ]);
        $this->forge->addKey('nisn', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
