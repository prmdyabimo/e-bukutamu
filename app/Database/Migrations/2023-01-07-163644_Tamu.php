<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tamu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tamu' => [
                'type' => 'INT',
                'constraint' => 20,
                'auto_increment' => true
            ],
            'nama_tamu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama_penemu' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nomor_identitas_tamu' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'alamat_tamu' => [
                'type' => 'TEXT'
            ],
            'keperluan_tamu' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'tanggal_kunjungan_tamu' => [
                'type' => 'TIMESTAMP',
                'current_timestamp' => true
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('id_tamu', true);
        $this->forge->createTable('tb_tamu');
    }

    public function down()
    {
        $this->forge->dropTable('tb_tamu');
    }
}
