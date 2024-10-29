<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddJamPembaruanToPresensiTable extends Migration
{
    public function up()
    {
        // Menambahkan kolom baru jam_piket, kegiatan_piket, dan foto_piket
        $this->forge->addColumn('presensi', [
            'jam_piket' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'kegiatan_piket' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'foto_piket' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        // Menghapus kolom jam_piket, kegiatan_piket, dan foto_piket jika migrasi di-rollback
        $this->forge->dropColumn('presensi', ['jam_piket', 'kegiatan_piket', 'foto_piket']);
    }
}
