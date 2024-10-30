<?php

namespace App\Controllers;

use App\Models\PresensiModel; // Ubah ke huruf kapital untuk konsistensi
use CodeIgniter\Controller; // Pastikan Controller diimport jika tidak ada BaseController

class PiketController extends BaseController
{
    public function piket()
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Set data yang ingin di-pass ke view
        $data['title'] = 'Piket';
        return view('piket', $data); // Gunakan return view() untuk konsistensi
    }

    public function piketForm()
    {
        // Mengambil file foto dari form
        $fotoPiket = $this->request->getFile('foto_piket');

        // Cek validitas file
        if ($fotoPiket->isValid() && !$fotoPiket->hasMoved()) {
            // Proses penyimpanan file
            if ($fotoPiket->move('uploads', $fotoPiket->getName())) {
                // Logika untuk menyimpan data piket ke database
                $modelPresensi = new PresensiModel();
                $id_user = session()->get('user_id');
                $presensi = $modelPresensi
                    ->where('id_magang', $id_user)
                    ->where('status', 'WFO')
                    ->where('jam_piket', NULL) // Cek apakah jam_piket NULL
                    ->where('kegiatan_piket', NULL) // Cek apakah kegiatan_piket NULL
                    ->where('foto_piket', NULL) // Cek apakah foto_piket NULL
                    ->first(); // Ambil hasil pertama yang sesuai


                if ($presensi) {
                    $data = [
                        'jam_piket' => $this->request->getPost('jamPiket'), // Mengambil waktu dari input
                        'kegiatan_piket' => $this->request->getPost('progressPiket'), // Mengambil kegiatan dari input
                        'foto_piket' => $fotoPiket->getName(), // Nama file foto yang diupload
                    ];

                    // Menyimpan data ke database
                    if ($modelPresensi->update($presensi['id_presensi'], $data)) {
                        return redirect()->to('/success-piket')->with('success', 'Piket berhasil disimpan.');
                    } else {
                        // Mengambil dan menampilkan kesalahan dari model
                        return redirect()->to('/piket')->with('error', 'Gagal menyimpan data piket ke database: ' . json_encode($modelPresensi->errors()));
                    }
                } else {
                    return redirect()->to('/piket')->with('error', 'Presensi piket tidak ditemukan untuk pengguna ini, dikarenakan WFH.');
                }
            } else {
                return redirect()->to('/piket')->with('error', 'Gagal menyimpan foto di server.');
            }
        } else {
            // Mengembalikan error jika foto tidak valid
            return redirect()->to('/piket')->with('error', 'Gagal menyimpan piket. Pastikan foto valid: ' . $fotoPiket->getError());
        }
    }
    public function sukses_piket()
    {
        return view('SuccesPiket');
    }
}
