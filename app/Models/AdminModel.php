<?php

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin'; // Sesuai dengan tabel di database
    protected $primaryKey = 'Id_admin';
    protected $allowedFields = ['Id_admin', 'Nama_anggota', 'Alamat', 'password'];
}
