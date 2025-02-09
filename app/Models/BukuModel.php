<?php

namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku'; // Sesuai dengan tabel di database
    protected $primaryKey = 'NIB';
    protected $allowedFields = ['NIB', 'Nama_buku', 'Qty', 'Id_pengarang', 'Id_penerbit'];
}
