<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembayaran' => [
                'type' => 'int',
                'constraint' => 11,

            ],

            'id_petugas' => [
                'type' => 'int',
                'constraint' => 11,
            ],

            'nisn' => [
                'type' => 'char',
                'constraint' => 10,

            ],

            'tgl_bayar' => [
                'type' => 'date',
            ],

            'bulan_bayaar' => [
                'type' => 'varchar',
                'constraint' => 8,
            ],

            'tahun_bayar' => [
                'type' => 'varchar',
                'constraint' => 4,
            ],

            'id_spp' => [
                'type' => 'int',
                'constraint' => 11,
            ],

            'jumlah_bayar' => [
                'type' => 'int',
                'constraint' => 11,
            ],

        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
