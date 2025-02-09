<?php

namespace App\Controllers;

use App\Models\PenerbitModel;
use CodeIgniter\Controller;

class PenerbitController extends Controller
{
    protected $penerbitModel;

    public function __construct()
    {
        $this->penerbitModel = new PenerbitModel();
    }

    // 📌 Menampilkan daftar penerbit
    public function index()
    {
        $data['penerbit'] = $this->penerbitModel->findAll(); // Mengambil semua data penerbit
        return view('/penerbit/tampilPenerbit', $data);
    }

    // 📌 Menampilkan form tambah penerbit
    public function create()
    {
        return view('/penerbit/tambahPenerbit');
    }

    // 📌 Menyimpan penerbit baru ke database
    public function store()
    {
        $this->penerbitModel->insert([
            'Id_penerbit' => $this->request->getPost('id_penerbit'),
            'Nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ]);

        return redirect()->to(base_url('tampil_penerbit'))->with('success', 'Penerbit berhasil ditambahkan!');
    }

    // 📌 Menampilkan form edit penerbit dengan data yang sudah ada
    public function edit($id)
    {
        $data['penerbit'] = $this->penerbitModel->find($id);

        if (!$data['penerbit']) {
            return redirect()->to(base_url('tampil_penerbit'))->with('error', 'Penerbit tidak ditemukan!');
        }

        return view('/penerbit/editPenerbit', $data);
    }

    // 📌 Menyimpan perubahan penerbit ke database
    public function update($id)
    {
        $this->penerbitModel->update($id, [
            'Nama_penerbit' => $this->request->getPost('nama_penerbit'),
        ]);

        return redirect()->to(base_url('tampil_penerbit'))->with('success', 'Penerbit berhasil diperbarui!');
    }

    // 📌 Menghapus penerbit dari database
    public function delete($id)
    {
        $this->penerbitModel->delete($id);
        return redirect()->to(base_url('tampil_penerbit'))->with('success', 'Penerbit berhasil dihapus!');
    }
}
