<?php

namespace App\Models;

use CodeIgniter\Model;

class LihatDataBuku_Model extends Model
{
    protected $table = 'lihat_data_buku';

    public function getAllData()
    {
        return $this->db->table('lihat_data_buku')
            ->get()
            ->getResultArray();
    }
}
