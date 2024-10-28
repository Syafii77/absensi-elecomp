<?php

namespace App\Controllers;
use App\Models\presensiModel;
use App\Models\UserModel;

class deleteFotoController extends BaseController
{

    public function deleteAll()
{
    $presensiModel = new presensiModel();
   
   
    $tanggalAwal = date('Y-m-d',strtotime('-6 days'));

    $semuaFoto = $presensiModel->select('foto')
                                ->where('tanggal <', $tanggalAwal)
                                ->where('foto IS NOT NULL')
                                ->findAll();
    
        // Loop untuk menghapus file fisik
        foreach ($semuaFoto as $photo) {
            $filePath = FCPATH . 'uploads/photos/' . $photo['foto'];
           
            if (file_exists($filePath)) {
                unlink($filePath); // Hapus foto dari sistem file
            }
        }
        
    
        // Hapus semua data foto dari database
        $presensiModel->where('tanggal <',$tanggalAwal)
                        ->where('foto IS NOT NULL')
                        ->set('foto', null)
                        ->update();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('message', 'Semua foto minggu lalu berhasil dihapus.');
    
    
}

    

  
}
