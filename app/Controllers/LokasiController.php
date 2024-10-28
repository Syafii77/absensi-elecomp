<?php

namespace App\Controllers;
use App\Models\presensiModel;

class lokasiController extends BaseController
{

    public function index()
    {
        $presensiModel = new presensiModel();
        
        //ambil tanggal dari form
        $tanggal = $this->request->getGet('tanggal') ?: date('Y-m-d');
        
        //cari data presensi
        $presensi = $presensiModel->select('presensi.*,user.Nama')
                                  ->join('user','user.id_magang = presensi.id_magang')
                                  ->where('tanggal', $tanggal)
                                  ->findAll();

        $data =[
            'presensi' => $presensi,
            'tanggal' => $tanggal,
            'title' => 'Lokasi',
        ];
                                 
        return view('lokasiAdmin', $data);
    }
}



