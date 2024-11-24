<?php

namespace App\Controllers;
use App\Models\presensiModel;

class RekapitulasiChecklist extends BaseController
{
    public function rekapitulasichecklist()
    {
        // Pastikan pengguna telah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $modelPresensi = new PresensiModel();
        $viewAll = $this->request->getGet('view_all');

        // Ambil data presensi dan Nama berdasarkan viewAll atau pagination
        $dataPerPage = 5;
        $data['presensi'] = $modelPresensi->orderBy('tanggal', 'DESC')->orderBy('jam_piket', 'DESC')->getPresensiWithUser($viewAll, $dataPerPage);
        $data['pager'] = $viewAll ? null : $modelPresensi->pager;

        $data['title'] = 'Rekapitulasi Checklist';
        $data['viewAll'] = $viewAll;

        // Tampilkan view dengan data yang dikirim
        return view('rekapitulasichecklist', $data);
    }
}
