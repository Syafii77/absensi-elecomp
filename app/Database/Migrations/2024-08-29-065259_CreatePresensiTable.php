<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePresensiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_presensi' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_magang' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Hadir', 'Izin', 'Sakit'],
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'jam_masuk' => [
                'type' => 'TIME',
            ],
            'jam_keluar' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'kegiatan' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'checkIn_latitude' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'checkin_longitude' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'checkout_latitude' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'checkout_longitude' => [
                'type' => 'DOUBLE',
                'null' => true,
            ],
            'verifikasi' => [
                'type' => 'ENUM',
                'constraint' => ['Sukses', 'Pending'],
            ],
        ]);

        $this->forge->addPrimaryKey('id_presensi');
        $this->forge->addKey('id_magang');
        $this->forge->addForeignKey('id_magang', 'user', 'id_magang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('presensi');
    }

    public function down()
    {
        $this->forge->dropTable('presensi');
    }
}
