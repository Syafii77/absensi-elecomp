<?php

namespace App\Controllers;

use App\Models\presensiModel;

class VerifyUser extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $userId = session()->get('user_id');

        $ModelPresensi = new presensiModel();

        // tanggal 
        $tanggalHariIni = date('Y-m-d');

        // pagination
        $perPage = 5; // Users per page

        $data['data_presensi'] = $ModelPresensi
            ->select('presensi.*, user.nama as Nama')
            ->join('user', 'user.id_magang = presensi.id_magang')
            ->where('tanggal', $tanggalHariIni)
            ->where('verifikasi', 'Pending')
            ->orderBy('jam_masuk', 'desc')
            ->paginate($perPage, 'presensi');

         // Generate pagination links
         $data['pager'] = $ModelPresensi->pager;

        $data['tanggal_hari_ini'] = $this->getTanggalHariIni();
        
        
        $data['title'] = 'Verify User';
        return view('verifyuser', $data);
    }

    private function getTanggalHariIni(): string
    {
        $hari = date('l');
        $tanggal = date('j');
        $bulan = date('F');
        $tahun = date('Y');

        $namaHari = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        $namaBulan = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];

        return $namaHari[$hari] . ', ' . $tanggal . ' ' . $namaBulan[$bulan] . ' ' . $tahun;
    }

    public function updateVerifikasi($id_presensi, $status)
    {
        $ModelPresensi = new presensiModel();
        $presensi = $ModelPresensi->find($id_presensi);
        
        if ($presensi) {
            // Set verifikasi
            $verifikasiStatus = 'Sukses';
            
            // Set 'status' ke parameter
            $newStatus = $status;
            
            // Update
            $ModelPresensi->update($id_presensi, [
                'status' => $newStatus,
                'verifikasi' => $verifikasiStatus
            ]);
        
            return redirect()->to(site_url('verifyuser'))->with('success', 'Status verifikasi dan status berhasil diperbarui.');
        }
    }

    
}