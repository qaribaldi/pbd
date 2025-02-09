<?php

namespace App\Models;
use CodeIgniter\Model;

class PenerbitModel extends Model
{
    protected $table = 'penerbit'; // Sesuai dengan tabel di database
    protected $primaryKey = 'Id_penerbit';
    protected $allowedFields = ['Id_penerbit', 'Nama_penerbit'];
}
