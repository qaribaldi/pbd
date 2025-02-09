<?php
namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'NO_pinjam';
    protected $allowedFields = ['NIM', 'NIB', 'Tanggal_Pinjam', 'Tanggal_Kembali', 'Id_admin'];
}
