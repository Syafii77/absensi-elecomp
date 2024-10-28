<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'id_magang';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['Nama','asal_institusi','Jenis_kelamin','Nomor_telepon','email','password','alamat','role'];


}