<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_magang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'asal_institusi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['laki-laki', 'perempuan'],
                'default' => 'laki-laki',
            ],
            'Nomor_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default' => 'user',
            ],
        ]);

        $this->forge->addPrimaryKey('id_magang');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
