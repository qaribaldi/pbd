<?php

namespace App\Models;
use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota'; // Sesuai dengan tabel di database
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'Nama_anggota', 'Alamat', 'password'];
}
