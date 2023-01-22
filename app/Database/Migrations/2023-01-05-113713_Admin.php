<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type' => 'INT',
                'constraint' => 20,
                'auto_increment' => true
            ],
            'nama_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'email_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nomor_identitas_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'nomor_telepon_admin' => [
                'type' => 'INT',
                'constraint' => 20
            ],
            'password_admin' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at_admin' => [
                'type' => 'TIMESTAMP',
                'current_timestamp' => true
            ]
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('tb_admin');
    }

    public function down()
    {
        $this->forge->dropTable('tb_admin');
    }
}
