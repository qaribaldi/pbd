<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryPeminjamanModel extends Model
{
    protected $table = 'history_peminjaman';
    protected $primaryKey = 'NO_pinjam';
    protected $allowedFields = ['NIM', 'NIB', 'Tanggal_Pinjam', 'Tanggal_Kembali', 'Id_admin'];
}
