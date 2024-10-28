<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $userData = [
            'Nama'=>'Admin',
            'asal_institusi'=>'Elecomp Indonesia',
            'Jenis_kelamin'=>'Laki-laki',
            'Nomor_telepon'=>'1234567890',
            'email'=>'admin@gmail.com',
            'password'=>password_hash('admin123!',PASSWORD_DEFAULT),
            'alamat'=>'Jl Danau Giji C5 D7 Perumahan Sawojajar, Kota Malang, Jawa Timur',
            'role'=>'admin',
        ];

        $userModel->insert($userData);
    }
}
