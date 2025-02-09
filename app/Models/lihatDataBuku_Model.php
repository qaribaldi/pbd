<?php

namespace App\Models;

use CodeIgniter\Model;

class LihatDataBuku_Model extends Model
{
    protected $table = 'lihat_data_buku'; 

    public function getAllData()
    {
        return $this->db->table('peminjaman') 
                    ->join('buku', 'buku.NIB = peminjaman.NIB')
                    ->select('peminjaman.NO_pinjam, peminjaman.NIM, peminjaman.NIB, buku.Nama_buku, peminjaman.Tanggal_Pinjam, peminjaman.Tanggal_Kembali, peminjaman.Id_admin')
                    ->get()
                    ->getResultArray();
    }


}
