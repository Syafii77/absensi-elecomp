<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\presensiModel;

class CheckoutController extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('auth/login');
        }

        $userId = session()->get('user_id');

        // Ambil data user dari usermodel
        $userModel = new UserModel();
        $userData = $userModel->find($userId);

        // data array
        $data = [
            'nama' => $userData['Nama'], // pass data Nama
        ];

        $data['title'] = 'checkout';
        echo view('checkout', $data); 
    }

    public function checkout()
    {
        $validation = \Config\Services::validation();

        $ModelPresensi = new presensiModel();
        
        // Ambil data dari form
        $id_magang = session()->get('user_id');
        $jam_keluar = $this->request->getPost('jamKeluar');
        $kegiatan = $this->request->getPost('Progress');
        $latitude_checkout = $this->request->getPost('latitude_checkout');
        $longitude_checkout = $this->request->getPost('longitude_checkout');
        
        // Check if location (latitude and longitude) is provided
        if (empty($latitude_checkout) || empty($longitude_checkout)) {
            return redirect()->back()->with('error', 'Lokasi tidak terdeteksi. Pastikan GPS Anda aktif dan coba lagi.');
        }
    
        // Membatasi waktu checkout berdasarkan hari
        $tanggal = $this->request->getPost('tanggalKeluar');
        $hari = date('l', strtotime($tanggal)); // Mendapatkan hari dari tanggal
    
        $jamKeluarTimestamp = strtotime($jam_keluar);
    
        // Aturan checkout untuk hari biasa dan Sabtu
        if ($hari === 'Saturday') {
            // Pembatasan waktu checkout hari Sabtu (13:00-14:00)
            $batasAwal = strtotime('13:00');
            $batasAkhir = strtotime('14:00');
        } else {
            // Pembatasan waktu checkout hari biasa (16:00-16:30)
            $batasAwal = strtotime('16:00');
            $batasAkhir = strtotime('16:30');
        }
    
        if ($jamKeluarTimestamp < $batasAwal || $jamKeluarTimestamp > $batasAkhir) {
            // Tentukan pesan error berdasarkan hari
            $pesanError = ($hari === 'Saturday') 
                ? 'Checkout untuk hari Sabtu hanya dapat dilakukan pada pukul 13:00-14:00.'
                : 'Checkout untuk hari Senin-Jum\'at hanya dapat dilakukan pada pukul 16:00-16:30.';
                
            return redirect()->back()->with('error', $pesanError);
        }
    
        // Cari data presensi berdasarkan tanggal dan id magang untuk mengupdate checkout-nya
        $presensi = $ModelPresensi->where('id_magang', $id_magang)
                                  ->where('tanggal', $tanggal)
                                  ->first();
    
        // Kalau ketemu, update datanya
        if ($presensi) {
            $ModelPresensi->update($presensi['id_presensi'], [
                'jam_keluar' => $jam_keluar,
                'kegiatan' => $kegiatan,
                'checkout_latitude' => $latitude_checkout,
                'checkout_longitude' => $longitude_checkout,
            ]);
    
            return redirect()->to('/success-checkout')->with('success', 'Checkout berhasil dilakukan');
        } else {
            session()->setFlashdata('error', 'Check-out gagal. Pastikan Anda sudah melakukan check-in pada tanggal tersebut.');
            return redirect()->back()->withInput();
        }
        
        $data['title'] = 'checkout';
        echo view('checkout', $data);    
    }
}
