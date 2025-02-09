<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use CodeIgniter\Controller;

class AnggotaController extends Controller
{
    protected $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    // 📌 Menampilkan daftar anggota
    public function index()
    {
        $data['anggota'] = $this->anggotaModel->findAll(); // Mengambil semua data anggota
        return view('/anggota/tampilAnggota', $data);
    }

    // 📌 Menampilkan form tambah anggota
    public function create()
    {
        return view('/anggota/tambahAnggota');
    }

    // 📌 Menyimpan anggota baru ke database
    public function store()
    {
        $this->anggotaModel->insert([
            'NIM' => $this->request->getPost('nim'),
            'Nama_anggota' => $this->request->getPost('nama_anggota'),
            'Alamat' => $this->request->getPost('alamat')
        ]);

        return redirect()->to('tampil_anggota')->with('success', 'Anggota berhasil ditambahkan!');
    }

    // 📌 Menampilkan form edit anggota dengan data yang sudah ada
    public function edit($id)
    {
        $data['anggota'] = $this->anggotaModel->find($id);

        if (!$data['anggota']) {
            return redirect()->to('tampilAnggota')->with('error', 'Anggota tidak ditemukan!');
        }

        return view('/anggota/editAnggota', $data);
    }

    // 📌 Menyimpan perubahan anggota ke database
    public function update($id)
    {
        $this->anggotaModel->update($id, [
            'Nama_anggota' => $this->request->getPost('nama_anggota'),
            'Alamat' => $this->request->getPost('alamat')
        ]);

        return redirect()->to(base_url('tampil_anggota'))->with('success', 'Anggota berhasil diperbarui!');
    }

    // 📌 Menghapus anggota dari database
    public function delete($id)
    {
        $this->anggotaModel->delete($id);
        return redirect()->to(base_url('tampil_anggota'))->with('success', 'Anggota berhasil dihapus!');
    }
}
