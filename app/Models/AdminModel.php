<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin'; // Sesuai dengan tabel di database
    protected $primaryKey = 'Id_admin';
    protected $allowedFields = ['Id_admin', 'Nama_anggota', 'Alamat', 'password'];

    public function register($Id_admin, $password, $nama, $alamat)
    {
        return $this->insert([
            'Id_admin' => $Id_admin,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'Nama_anggota' => $nama,
            'Alamat' => $alamat
        ]) ? true : false;
    }

    public function getUserByUsername($Id_admin)
    {
        return $this->where('Id_admin', $Id_admin)->first();
    }
}
