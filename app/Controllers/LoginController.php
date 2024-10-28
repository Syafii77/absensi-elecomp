<?php

namespace App\Controllers;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $userModel = new UserModel();

        // Ambil data input dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cek apakah email terdaftar
        $user = $userModel->where('email', $email)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session
                session()->set([
                    'id_magang' => $user['id_magang'],
                    'Nama' => $user['Nama'],
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'logged_in' => true,
                ]);

                // Redirect ke halaman dashboard atau halaman yang sesuai
                return redirect()->to('/checkout');
            } else {
                // Password salah
                session()->setFlashdata('error', 'Password salah');
                return redirect()->back();
            }
        } else {
            // Email tidak ditemukan
            session()->setFlashdata('error', 'Email tidak ditemukan');
            return redirect()->back();
        }
    }

    public function logout()
    {
        // Hapus session
        session()->destroy();
        return redirect()->to('/login');
    }
}
