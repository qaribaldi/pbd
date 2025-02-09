<?php

namespace App\Models;
use CodeIgniter\Model;

class PengarangModel extends Model
{
    protected $table = 'pengarang'; // Sesuai dengan tabel di database
    protected $primaryKey = 'Id_pengarang';
    protected $allowedFields = ['Id_pengarang', 'Nama_pengarang'];
}
